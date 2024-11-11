<?php
include "mydb.php";
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['image_id'])) {
        $imageId = $_POST['image_id'];

        $filepath = __DIR__ . "/uploads/{$imageId}.webp";
        if (file_exists($filepath)) {
            unlink($filepath);
        }

        $stmt_delete = $mysqli->prepare("DELETE FROM images WHERE filename = ?");
        $stmt_delete->bind_param("s", $imageId);
        $stmt_delete->execute();
        $stmt_delete->close();

        $verifUserPresent = $mysqli->prepare("SELECT * FROM images WHERE filename = ?");
        $verifUserPresent->bind_param("s", $imageId);
        $verifUserPresent->execute();
        $result = $verifUserPresent->get_result();

        if ($result->num_rows <= 0) {
            $verifUserPresent->close();

            $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">L\'image a été réinitialisé avec succès.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();
        } else {
            $verifUserPresent->close();

            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">La réinitialisation de l\'image a échoué. Veuillez réessayer.</h3>';
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
    } elseif (isset($_POST['text_id'])) {
        $textId = $_POST['text_id'];

        $stmt_delete = $mysqli->prepare("DELETE FROM texts WHERE name = ?");
        $stmt_delete->bind_param("s", $textId);
        $stmt_delete->execute();
        $stmt_delete->close();

        $verifUserPresent = $mysqli->prepare("SELECT * FROM texts WHERE name = ?");
        $verifUserPresent->bind_param("s", $textId);
        $verifUserPresent->execute();
        $result = $verifUserPresent->get_result();

        if ($result->num_rows <= 0) {
            $verifUserPresent->close();

            $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">Le texte a été réinitialisé avec succès.</h3>';
            $currentURL = $_SESSION['CurrentURL'];
            $filename_URL = $currentURL;

            if ($filename_URL == '/' || $filename_URL == '/traitement_editPage.php') {
                $filename_URL = 'https://lacissoniere.fr';
                header("location: $filename_URL");
                exit();
            }

            header("location: $filename_URL");
            exit();
        } else {
            $verifUserPresent->close();

            $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">La réinitialisation du texte a échoué. Veuillez réessayer.</h3>';
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
    } else {
        $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Une erreur est survenue. Veuillez réessayer.</h3>';
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
