<?php
include "session.php";
include "mydb.php";
include "readAdmins.php";

$verifDefaultUser = $mysqli->query("SELECT * FROM admins WHERE username = 'Cassetete'");
if ($verifDefaultUser->num_rows <= 0) {
    $defaultPassword = "LeMdpAdmin000";
    $requete = "INSERT INTO admins(username, email, password) VALUES ('Cassetete','cassetete@gmail.com','$defaultPassword')";
    $mysqli->query($requete);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email != "" && $password != "") {

            $stmt = $mysqli->prepare("SELECT * FROM admins WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                if ($password === $row['password']) {

                    $token = bin2hex(random_bytes(32));
                    $expirationTime = time() + 3600;
                    $infiniteExpiration = time() + (10 * 365 * 24 * 60 * 60);
                    setcookie("username", $row['username'], $infiniteExpiration, "/");
                    setcookie("email", $email, $infiniteExpiration, "/");
                    setcookie("token", $token, $infiniteExpiration, "/");
                    setcookie("token_expiration", $expirationTime, $expirationTime, "/");
                    header("location: success.php", true, 303);
                    exit();
                } else {
                    $_SESSION['login_error'] = "Mot de passe incorrect.";
                    $_SESSION['noResetEmail'] = $email;
                    header("location: connexion.php#section_1");
                    exit();
                }
            } else {
                $_SESSION['login_error'] = "Aucun compte trouvé avec cet email.";
                header("location: connexion.php#section_1");
                exit();
            }
        }
    }
    $stmt->close();
    $_SESSION['error_detected'] = '<h3 id="temp-content" style="color: red; text-align: center;">Une erreur est survenue. Veuillez réessayer.</h3>';
    header("location: connexion.php");
    exit();
}
