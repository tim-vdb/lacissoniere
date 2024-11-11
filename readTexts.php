<?php
include("mydb.php");

$result = $mysqli->query('SELECT name, content FROM texts');
if ($result) {
    $rows_texts = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $rows_texts = [];
}