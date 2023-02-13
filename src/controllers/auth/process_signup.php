<?php

spl_autoload_register(function ($class) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/../" . lcfirst(str_replace('\\', '/', $class) . ".php");
    require $path;
});

use Src\Controllers\Auth\CheckPassword;

var_dump($_POST);

if (isset($_POST['auth_type']) && $_POST['auth_type'] === 'signup') {
    $checkPwd = new CheckPassword($_POST['pass_signup']);
    $errors = $checkPwd->getErrors();

    var_dump($errors);

    if (empty($_POST["username_signup"])) {
        die("Name is required");
    }

    if (!filter_var($_POST["email_signup"], FILTER_VALIDATE_EMAIL)) {
        die("Valid email is required");
    }

    if (strlen($_POST["pass_signup"]) < 8) {
        die("Password must be at least 8 characters");
    }

    if (!preg_match("/[a-z]/i", $_POST["pass_signup"])) {
        die("Password must contain at least one letter");
    }

    if (!preg_match("/[0-9]/", $_POST["pass_signup"])) {
        die("Password must contain at least one number");
    }

    if ($_POST["pass_signup"] !== $_POST["re_pass_signup"]) {
        die("Passwords must match");
    }
}
