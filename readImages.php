<?php
include("mydb.php");

$result = $mysqli->query('SELECT filename, filepath FROM images');
if ($result) {
    $rows_images = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $rows_images = [];
}
