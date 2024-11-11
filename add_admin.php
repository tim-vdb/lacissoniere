<?php
include "client.php";
include "session.php";
include "mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_signUp'])) {
    $username = $_POST['username'];
    $email = $_POST['email_signUp'];
    $password = $_POST['password_signUp'];

    $verifUserPresent = $mysqli->prepare("SELECT * FROM admins WHERE username = ? or email = ?");
    $verifUserPresent->bind_param("ss",$username, $email);
    $verifUserPresent->execute();
    $result = $verifUserPresent->get_result();

    if ($result->num_rows <= 0) {
        $stmt = $mysqli->prepare("INSERT INTO admins (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $stmt->execute();
        $stmt->close();

        $_SESSION['success_detected'] = '<h3 id="temp-content" style="color: green; text-align: center;">L\'Administrateur a été ajouté avec succès.</h3>';
        header("location: admins.php");
        exit();
    } else {  
        $verifUserPresent->close();
        $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">L\'Administrateur a déjà été ajouté.</h3>';
        header("location: admins.php");
        exit();
    }
} else {
    $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Vous n\'avez pas accès à cette page.</h3>';
    header("location: admins.php");
    exit();
}
