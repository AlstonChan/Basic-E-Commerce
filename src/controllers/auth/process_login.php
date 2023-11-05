<?php

spl_autoload_register(function ($class) {
    $path =
        $_SERVER['DOCUMENT_ROOT'] .
        '/../' .
        lcfirst(str_replace('\\', '/', $class) . '.php');
    require $path;
});

use Src\Controllers\Auth\Validate\CheckPassword;

if (isset($_POST['auth_type']) && $_POST['auth_type'] === 'login') {
    $db = require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/models/db.php';

    $formErrors = [];
    $formValues = [];

    echo empty($_POST['email_login']);
    // email
    if (
        !filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL) ||
        empty($_POST['email_login'])
    ) {
        $formErrors['email_login'] = 'Valid email is required';
    } else {
        $formValues['email_login'] = $_POST['email_login'];
    }

    // password
    $checkPwd = new CheckPassword(password: $_POST['pass_login']);
    $passErrors = $checkPwd->validatePass()->getErrors();
    if (!empty($passErrors)) {
        $formErrors['pass_login'] = 'Your password is incorrect!';
    }

    $host = $_SERVER['HTTP_HOST'];

    if (empty($formErrors)) {
        $sql = sprintf(
            "SELECT * FROM users WHERE email = '%s'",
            mysqli_real_escape_string($db, $_POST['email_login'])
        );
        $result = mysqli_query($db, $sql);

        $user = $result->fetch_assoc();

        if ($user) {
            if (password_verify($_POST['pass_login'], $user['password'])) {
                require_once $_SERVER['DOCUMENT_ROOT'] .
                    '/../src/controllers/session.php';
                session_regenerate_id();

                $_SESSION['user_id'] = $user['userId'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                header("Location: http://$host/", true);
                exit();
            } else {
                $formErrors['pass_login'] = 'Your password is incorrect!';
                require_once $_SERVER['DOCUMENT_ROOT'] .
                    '/../src/routes/auth.php';
            }
        } else {
            $formErrors['email_login'] = 'User not found';
            require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/routes/auth.php';
        }
    } else {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/routes/auth.php';
    }
}
