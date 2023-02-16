<?php

spl_autoload_register(function ($class) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/../" . lcfirst(str_replace('\\', '/', $class) . ".php");
    require $path;
});

use Src\Controllers\Auth\Validate\CheckPassword;
use Src\Controllers\Auth\Validate\CheckUsername;

if (isset($_POST['auth_type']) && $_POST['auth_type'] === 'signup') {
    $formErrors = [];
    $formValues = [];

    // username 
    $checkUser = new CheckUsername($_POST['username_signup']);
    $usernameErrors = $checkUser->validateName()->getErrors();
    if (empty($usernameErrors)) {
        $formValues['username_signup'] = $_POST['username_signup'];
    } else $formErrors['username_signup'] = $usernameErrors;

    // email 
    if (!filter_var($_POST["email_signup"], FILTER_VALIDATE_EMAIL)) {
        $formErrors["email_value"] = ("Valid email is required");
    } else $formValues['email_signup'] = $_POST["email_signup"];

    // password
    $checkPwd = new CheckPassword($_POST['pass_signup']);
    $passErrors = $checkPwd->validatePass()->getErrors();
    if (!empty($passErrors)) {
        $formErrors['pass_signup'] = $passErrors;
    }

    // confirm password 
    $isPassMatch = $checkPwd->isPassMatch($_POST["re_pass_signup"]);
    if (!$isPassMatch) {
        $formErrors['re_pass_signup'] = "Password doesn't match";
    }

    $_SESSION['formErrors'] = $formErrors;
    $_SESSION['formValues'] = $formValues;

    $host  = $_SERVER['HTTP_HOST'];

    if (empty($formErrors)) {
        header("Location: http://$host/", true);
    } else {
        // insert data into database
        header("Location: http://$host/auth?type=signup", true);
    }
}
