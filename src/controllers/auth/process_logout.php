<?php
// Initialize the session.
require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/controllers/session.php';

// Unset all of the session variables.
$_SESSION = [];
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
}

// Finally, destroy the session.
session_destroy();

$host = $_SERVER['HTTP_HOST'];
$protocol = $_SERVER['REQUEST_SCHEME'];

header("Location: $protocol://$host/", true);
exit();
