<?php

spl_autoload_register(function ($class) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/../" . lcfirst(str_replace('\\', '/', $class) . ".php");
    require $path;
});

use Src\Controllers\Auth\Validate\CheckPassword;
use Src\Controllers\Auth\Validate\CheckUsername;

if (isset($_POST['auth_type']) && $_POST['auth_type'] === 'signup') {
    $formErrors = [];

    $checkUser = new CheckUsername($_POST['username_signup']);
    $usernameErrors = $checkUser->validateName()->getErrors();

    if (!filter_var($_POST["email_signup"], FILTER_VALIDATE_EMAIL)) {
        $formErrors["email_signup"] = ("Valid email is required");
    }

    $checkPwd = new CheckPassword($_POST['pass_signup']);
    $passErrors = $checkPwd->validatePass()->getErrors();

    $isPassMatch = $checkPwd->isPassMatch($_POST["re_pass_signup"]);
    if (!$isPassMatch) $formErrors['re_pass_signup'] = "Password doesn't match";

    $formErrors['username_signup'] = $usernameErrors;
    $formErrors['pass_signup'] = $passErrors;

    echo '<pre>';
    print_r($formErrors);
    echo '/<prse>';

    // $host  = $_SERVER['HTTP_HOST'];
    // header("Location: http://$host/auth?type=signup", true);
}
