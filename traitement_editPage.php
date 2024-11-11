<?php
include "client.php";
include "mydb.php";
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formId = $_POST['form_id'];

    if (strpos($formId, 'file-form') !== false) {
        if (!isset($_FILES["file"]) || $_FILES["file"]["error"] !== UPLOAD_ERR_OK) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Aucun fichier à télécharger.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();
        }

        $filepath = $_FILES['file']['tmp_name'];
        $fileSize = filesize($filepath);
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $filetype = finfo_file($fileinfo, $filepath);
        $imageId = $_POST['image_id'];

        if ($fileSize === 0) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Le fichier est vide.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();
        }

        if ($fileSize > 3145728) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Le fichier est trop volumineux.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();;
        }

        $allowedTypes = [
            'image/png' => 'png',
            'image/jpeg' => 'jpg',
            'image/webp' => 'webp'
        ];

        if (!array_key_exists($filetype, $allowedTypes)) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Type de fichier non autorisé.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();
        }

        $filename = $imageId;
        $extension = $allowedTypes[$filetype];
        $targetDirectory = __DIR__ . "/uploads";

        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;
        $relativeFilepath = "uploads/" . $filename . "." . $extension;

        if (file_exists($newFilepath)) {
            unlink($newFilepath);
        }

        if (!move_uploaded_file($filepath, $newFilepath)) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Impossible de déplacer le fichier.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();
        }

        if ($filetype === 'image/jpeg' || $filetype === 'image/png') {
            $webpFilepath = $targetDirectory . "/" . $filename . ".webp";
            switch ($filetype) {
                case 'image/jpeg':
                    $image = imagecreatefromjpeg($newFilepath);
                    break;
                case 'image/png':
                    $image = imagecreatefrompng($newFilepath);
                    break;
                default:
                    $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Type de fichier non supporté.</h3>';
                    $currentURL = $_SESSION['CurrentURL'];
                    $filename_URL = $currentURL;

                    if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                        $filename_URL = 'https://lacissoniere.fr';
                        header("location: $filename_URL");
                        exit();
                    }

                    header("location: $filename_URL");
                    exit();
            }

            if (imagewebp($image, $webpFilepath)) {
                imagedestroy($image);
                unlink($newFilepath);
                $relativeFilepath = "uploads/" . $filename . ".webp";
            } else {
                imagedestroy($image);
                $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Échec de la conversion de l\'image en WebP.</h3>';
                $currentURL = $_SESSION['CurrentURL'];
                $filename_URL = $currentURL;

                if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                    $filename_URL = 'https://lacissoniere.fr';
                    header("location: $filename_URL");
                    exit();
                }

                header("location: $filename_URL");
                exit();
            }
        }

        // Supprimer l'entrée existante
        $stmt_delete = $mysqli->prepare("DELETE FROM images WHERE filename = ?");
        $stmt_delete->bind_param("s", $filename);
        $stmt_delete->execute();
        $stmt_delete->close();

        // Insérer la nouvelle entrée
        $stmt_insert = $mysqli->prepare("INSERT INTO images (filename, filepath) VALUES (?, ?)");
        $stmt_insert->bind_param("ss", $filename, $relativeFilepath);
        $stmt_insert->execute();
        $stmt_insert->close();

        // Vérifier l'insertion
        $verifUserPresent = $mysqli->prepare("SELECT * FROM images WHERE filename = ? AND filepath = ?");
        $verifUserPresent->bind_param("ss", $filename, $relativeFilepath);
        $verifUserPresent->execute();
        $result = $verifUserPresent->get_result();

        if ($result->num_rows <= 0) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">La modification de l\'image a échoué. Veuillez réessayer.</h3>';
        } else {
            $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">L\'image a été modifiée avec succès.</h3>';
        }
        $verifUserPresent->close();

        $currentURL = $_SESSION['CurrentURL'];
        $filename_URL = $currentURL;

        if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
            $filename_URL = 'https://lacissoniere.fr';
            header("location: $filename_URL");
            exit();
        }

        header("location: $filename_URL");
        exit();
    } elseif (strpos($formId, 'text-form') !== false) {
        $text = $_POST['text'];
        $textId = $_POST['text_id'];

        // Supprimer l'entrée existante
        $stmt_delete = $mysqli->prepare("DELETE FROM texts WHERE name = ?");
        $stmt_delete->bind_param("s", $textId);
        $stmt_delete->execute();
        $stmt_delete->close();

        // Insérer la nouvelle entrée
        $stmt_insert = $mysqli->prepare("INSERT INTO texts (name, content) VALUES (?, ?)");
        $stmt_insert->bind_param("ss", $textId, $text);
        $stmt_insert->execute();
        $stmt_insert->close();

        // Vérifier l'insertion
        $verifUserPresent = $mysqli->prepare("SELECT * FROM texts WHERE name = ? AND content = ?");
        $verifUserPresent->bind_param("ss", $textId, $text);
        $verifUserPresent->execute();
        $result = $verifUserPresent->get_result();

        if ($result->num_rows <= 0) {
            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">La modification du texte a échoué. Veuillez réessayer.</h3>';
        } else {
            $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">Le texte a été modifié avec succès.</h3>';
        }
        $verifUserPresent->close();

        $currentURL = $_SESSION['CurrentURL'];
        $filename_URL = $currentURL;

        if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
            $filename_URL = 'https://lacissoniere.fr';
            header("location: $filename_URL");
            exit();
        }

        header("location: $filename_URL");
        exit();
    }
}
