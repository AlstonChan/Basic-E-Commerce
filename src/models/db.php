<?php

$host = 'localhost';
$dbname = 'shop';
$username = 'root';
$password = '';

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname,
);

if (!$mysqli) {
    die('Connection error: ' . $mysqli_connect_error());
}

return $mysqli;
