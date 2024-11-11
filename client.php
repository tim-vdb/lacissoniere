<?php
$token = $_COOKIE['token'];

if (!$token) {
    header("Location: connexion.php");
    exit();
}
