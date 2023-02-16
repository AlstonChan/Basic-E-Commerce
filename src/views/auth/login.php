<?php

$isPost = isset($_POST['auth_type']) && $_POST['auth_type'] === 'login';
if ($isPost) {
    // email 
    if (isset($formErrors['email_login'])) {
        $email_errs = $formErrors['email_login'];
    } else if (isset($formValues['email_login'])) {
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
        if (isset(${$input . "_errs"})) {
            $inputErrors = ${$input . "_errs"};
        } else if (
            $input === 'password'
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
<p>Don't have an account? <a class="has-text-weight-bold" href="/auth?type=signup">Sign Up</a> here!</p>