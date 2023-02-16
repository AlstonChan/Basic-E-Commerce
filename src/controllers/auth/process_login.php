<?php

spl_autoload_register(function ($class) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/../" . lcfirst(str_replace('\\', '/', $class) . ".php");
    require $path;
});

use Src\Controllers\Auth\Validate\CheckPassword;

if (isset($_POST['auth_type']) && $_POST['auth_type'] === 'login') {
    $formErrors = [];
    $formValues = [];

    echo empty($_POST["email_login"]);
    // email 
    if (!filter_var($_POST["email_login"], FILTER_VALIDATE_EMAIL) || empty($_POST["email_login"])) {
        $formErrors["email_login"] = "Valid email is required";
    } else {
        $formValues['email_login'] = $_POST["email_login"];
        //query database here
    }

    // password
    $checkPwd = new CheckPassword(password: $_POST['pass_login']);
    $passErrors = $checkPwd->validatePass()->getErrors();
    if (!empty($passErrors)) {
        $formErrors['pass_login'] = 'Your password is incorrect!';
    } else {
        //query database here
    }

    $host  = $_SERVER['HTTP_HOST'];

    if (empty($formErrors)) {
        // insert data into database
        header("Location: http://$host/", true);
    } else {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/routes/auth.php";
    }
}
