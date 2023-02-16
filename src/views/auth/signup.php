<?php

$isPost = isset($_POST['auth_type']) && $_POST['auth_type'] === 'signup';
if ($isPost) {
    // username 
    if (isset($formErrors['username_signup'])) {
        $username_errs = $formErrors['username_signup'];
    } else if (isset($formValues['username_signup'])) {
        $username_value = $formValues['username_signup'];
    }

    // email 
    if (isset($formErrors['email_signup'])) {
        $email_errs = $formErrors['email_signup'];
    } else if (isset($formValues['email_signup'])) {
        $email_value = $formValues['email_signup'];
    }

    // password 
    if (isset($formErrors['pass_signup'])) {
        $password_errs = $formErrors['pass_signup'];
    } else if (isset($formErrors['re_pass_signup'])) {
        // confirm password 
        $confirm_password_errs = $formErrors['re_pass_signup'];
    }
}

$signUpInputList = ['username', 'email', 'password', 'confirm_password'];

foreach ($signUpInputList as $input) {
    if ($isPost) {
        if (isset(${$input . "_errs"})) {
            $inputErrors = ${$input . "_errs"};
        } else if (
            $input === 'confirm_password'
            || $input === 'password'
        ) {
            $inputErrors = 'NOT_SHOWN';
        } else $inputErrors = null;

        if (isset(${$input . "_value"})) {
            $input_value = ${$input . "_value"};
        } else $input_value = null;
    } else {
        $inputErrors = "NOT_SHOWN";
        $input_value = null;
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/views/input/" . $input . ".php";
}

?>

<p>Already have an account? <a class="has-text-weight-bold" href="/auth?type=login">Log in</a> here!</p>