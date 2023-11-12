<?php

spl_autoload_register(function ($class) {
    $path =
        $_SERVER['DOCUMENT_ROOT'] .
        '/../' .
        lcfirst(str_replace('\\', '/', $class) . '.php');
    require $path;
});

require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/controllers/auth/helper.php';

use Src\Controllers\Auth\Validate\CheckPassword;
use Src\Controllers\Auth\Validate\CheckUsername;

if (isset($_POST['auth_type']) && 'signup' === $_POST['auth_type']) {
    $db = require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/models/db.php';

    if (!check_if_table_exists($db, 'users')) {
        if (!create_users_table($db)) {
            throw new Exception('Unable to create table users');
        }
    }

    $formErrors = [];
    $formValues = [];

    // username
    $checkUser = new CheckUsername($_POST['username_signup']);
    $usernameErrors = $checkUser->validateName()->getErrors();
    if (empty($usernameErrors)) {
        $formValues['username_signup'] = $_POST['username_signup'];
    } else {
        $formErrors['username_signup'] = $usernameErrors;
    }

    // email
    function isEmailUsed($db, string $email): bool
    {
        $query = 'SELECT email FROM users WHERE email = ?;';
        $stmt = mysqli_stmt_init($db);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            throw new Exception('Unable to prepare sql statement');
        } else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $row = mysqli_fetch_assoc($result);

            if ($row) {
                return true;
            } else {
                return false;
            }
        }

        mysqli_stmt_close($stmt);
    }

    if (!filter_var($_POST['email_signup'], FILTER_VALIDATE_EMAIL)) {
        $formErrors['email_signup'] = 'Valid email is required';
    } elseif (isEmailUsed($db, $_POST['email_signup'])) {
        $formErrors['email_signup'] = 'This email has already been registered!';
    } else {
        $formValues['email_signup'] = $_POST['email_signup'];
    }

    // password
    $checkPwd = new CheckPassword(
        password: $_POST['pass_signup'],
        mixedCase: true,
        minNums: 1,
    );
    $passErrors = $checkPwd->validatePass()->getErrors();
    if (!empty($passErrors)) {
        $formErrors['pass_signup'] = $passErrors;
    }

    // confirm password
    $isPassMatch = $checkPwd->isPassMatch($_POST['re_pass_signup']);
    if (!$isPassMatch) {
        $formErrors['re_pass_signup'] = "Password doesn't match";
    }

    $host = $_SERVER['HTTP_HOST'];

    if (empty($formErrors)) {
        $query =
            'INSERT INTO users (username, email, password) VALUES (?,?,?);';
        $stmt = mysqli_stmt_init($db);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            exit('An error occured');
        } else {
            $hashed = password_hash($_POST['pass_signup'], PASSWORD_DEFAULT);

            mysqli_stmt_bind_param(
                $stmt,
                'sss',
                $_POST['username_signup'],
                $_POST['email_signup'],
                $hashed,
            );
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location: http://$host/auth?type=login", true);
            exit;
        }
    } else {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/routes/auth.php';
    }
}
