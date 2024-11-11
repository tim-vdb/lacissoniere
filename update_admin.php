<?php
include "client.php";
include "mydb.php";
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_btn'])) {
    $userId = $_POST['userId'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("UPDATE admins SET username = ?, email = ?, password = ? WHERE id = ?");
    $stmt->bind_param("sssi", $username, $email, $password, $userId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $stmt->close();

        $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">Mise à jour réussie.</h3>';
        header("location: admins.php");
        exit();
    } else {
        $stmt->close();

        $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Aucune mise à jour effectuée. Veuillez réessayer.</h3>';
        header("location: admins.php");
        exit();
    }
} else {
    $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Vous n\'avez pas accès à cette page.</h3>';
    header("location: admins.php");
    exit();
}
