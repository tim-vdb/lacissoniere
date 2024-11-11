<?php
$mysqli = new mysqli("localhost", "root", "", "admins_lacissoniere");
if ($mysqli->connect_error) {
    error_log('Connection error: ' . $mysqli->connect_error);
}
