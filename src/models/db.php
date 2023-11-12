<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

$host = 'commerce-mariadb';
$dbname = $_ENV['MYSQL_DATABASE'];
$username = 'root';
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname,
);

if (!$mysqli) {
    exit('Connection error: ' . $mysqli_connect_error());
}

return $mysqli;
