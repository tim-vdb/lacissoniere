<?php
include "client.php";
include "session.php";
include "mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buttonDelete'])) {
    $userId = $_POST['buttonDelete'];

    $stmt_delete = $mysqli->prepare("DELETE FROM admins WHERE id = ?");
        $stmt_delete->bind_param("i", $userId);
        $stmt_delete->execute();
        $stmt_delete->close();

    $verifUserPresent = $mysqli->prepare("SELECT * FROM admins WHERE id = ?");
    $verifUserPresent->bind_param("i", $userId);
    $verifUserPresent->execute();
    $result = $verifUserPresent->get_result();

    if ($result->num_rows <= 0) {
        $verifUserPresent->close();

        $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">L\'Administrateur a été supprimé avec succès.</h3>';
        header("location: admins.php");
        exit();
    } else {
        $verifUserPresent->close();

        $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">La suppression de l\'Administrateur a échoué. Veuillez réessayer.</h3>';
        header("location: admins.php");
        exit();
    }
} else {
    $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Vous n\'avez pas accès à cette page.</h3>';
    header("location: admins.php");
    exit();
}
