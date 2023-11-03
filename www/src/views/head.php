<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/controllers/session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic E-Commerce<?php if (isset($page)) echo " | " . $page; ?></title>
    <meta name="title" content="Basic E-Commerce<?php if (isset($page)) echo " | " . $page; ?>" />

    <link rel="icon" href="/assets/favicon.ico">

    <!-- Stylesheet  -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bulma.css">

    <!-- Alpine Js  -->
    <script async defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>