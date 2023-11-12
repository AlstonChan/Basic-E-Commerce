<?php

$isPost = isset($_POST['auth_type']) && 'login' === $_POST['auth_type'];
if ($isPost) {
    // email
    if (isset($formErrors['email_login'])) {
        $email_errs = $formErrors['email_login'];
    } elseif (isset($formValues['email_login'])) {
        $email_value = $formValues['email_login'];
        if (isset($formErrors['pass_login'])) {
            // password
            $password_errs = $formErrors['pass_login'];
        }
    }
}

$loginInputList = ['email', 'password'];

foreach ($loginInputList as $input) {
    if ($isPost) {
        if (isset(${$input . '_errs'})) {
            $inputErrors = ${$input . '_errs'};
        } elseif ('password' === $input) {
            $inputErrors = 'NOT_SHOWN';
        } else {
            $inputErrors = null;
        }

        if (isset(${$input . '_value'})) {
            $input_value = ${$input . '_value'};
        } else {
            $input_value = null;
        }
    } else {
        $inputErrors = 'NOT_SHOWN';
        $input_value = null;
    }

    require_once $_SERVER['DOCUMENT_ROOT'] .
        '/../src/views/input/' .
        $input .
        '.php';
}
