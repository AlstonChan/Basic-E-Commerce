<?php

if (isset($_SESSION['formErrors'])) {
    // username 
    if (isset($_SESSION['formErrors']['username_signup'])) {
        $username_errs = $_SESSION['formErrors']['username_signup'];
    } else if (isset($_SESSION['formValues']['username_signup'])) {
        $username_value = $_SESSION['formValues']['username_signup'];
    }

    // email 
    if (isset($_SESSION['formErrors']['email_signup'])) {
        $email_errs = $_SESSION['formErrors']['email_signup'];
    } else if (isset($_SESSION['formValues']['email_signup'])) {
        $email_value = $_SESSION['formValues']['email_signup'];
    }

    // password 
    if (isset($_SESSION['formErrors']['pass_signup'])) {
        $password_errs = $_SESSION['formErrors']['pass_signup'];
    } else if (isset($_SESSION['formErrors']['re_pass_signup'])) {
        // confirm password 
        $confirm_password_errs = $_SESSION['formErrors']['re_pass_signup'];
    }
}

$signUpInputList = ['username', 'email', 'password', 'confirm_password'];

foreach ($signUpInputList as $input) {
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
    require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/views/input/" . $input . ".php";
}

?>

<p>Already have an account? <a class="has-text-weight-bold" href="/auth?type=login">Log in</a> here!</p>