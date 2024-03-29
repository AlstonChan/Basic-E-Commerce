<?php

$isPost = isset($_POST['auth_type']) && 'signup' === $_POST['auth_type'];
if ($isPost) {
    // username
    if (isset($formErrors['username_signup'])) {
        $username_errs = $formErrors['username_signup'];
    } elseif (isset($formValues['username_signup'])) {
        $username_value = $formValues['username_signup'];
    }

    // email
    if (isset($formErrors['email_signup'])) {
        $email_errs = $formErrors['email_signup'];
    } elseif (isset($formValues['email_signup'])) {
        $email_value = $formValues['email_signup'];
    }

    // password
    if (isset($formErrors['pass_signup'])) {
        $password_errs = $formErrors['pass_signup'];
    } elseif (isset($formErrors['re_pass_signup'])) {
        // confirm password
        $confirm_password_errs = $formErrors['re_pass_signup'];
    }
}

$signUpInputList = ['username', 'email', 'password', 'confirm_password'];

foreach ($signUpInputList as $input) {
    if ($isPost) {
        if (isset(${$input . '_errs'})) {
            $inputErrors = ${$input . '_errs'};
        } elseif ('confirm_password' === $input || 'password' === $input) {
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
