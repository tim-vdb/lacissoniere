<?php
include ("mydb.php");

$result = $mysqli->query('SELECT * FROM admins');
$rows = $result->fetch_all(MYSQLI_ASSOC);
