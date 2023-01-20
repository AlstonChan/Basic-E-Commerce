<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic E-Commerce</title>
    <meta name="title" content="Basic E-Commerce" />

    <link rel="icon" href="/basic-e-commerce/public/assets/favicon.ico">

    <link rel="stylesheet" href="/basic-e-commerce/lib/bulma/bulma.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->
</head>
<style>
    .hero {
        background-image: url(/basic-e-commerce/public/assets/hero_phone_sml.jpg);
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .hero::after {
        content: '';
        min-width: 3500px;
        height: 100px;
        background-repeat: repeat-x;
        background-image: url(/basic-e-commerce/public/assets/wave.svg);
        background-color: #fff
    }

    /* secondary.php  */
    @media screen and (max-width:1024px) {
        .remain-navbar {
            align-items: stretch !important;
            display: flex !important;
            min-height: 3.25rem !important;
        }

        .remain-navMenu {
            align-items: stretch !important;
            display: flex !important;
            flex-grow: 1 !important;
            flex-shrink: 0 !important;
            background-color: inherit !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .remain-navStart {
            display: flex !important;
            align-items: stretch !important;
            justify-content: flex-start !important;
        }

        .remain-navItem {
            color: #fff !important;
            align-items: center !important;
            display: flex !important;
        }

        .remain-navItem:hover {
            background-color: #00b89c !important;
        }
    }

    .homeCard:hover {
        transform: scale(1.009);
    }

    .sml-icon {
        vertical-align: middle;
        transform: scale(1.4);
    }

    .columnCard-info {
        box-shadow: 2px 4px 22px 8px rgb(62, 142, 208, 0.25);
    }

    .columnCard-primary {
        box-shadow: 2px 4px 22px 8px rgb(0, 209, 178, 0.25);
    }

    .columnCard-warning {
        box-shadow: 2px 4px 22px 8px rgb(255, 224, 138, 0.25);
    }

    .columnCard-success {
        box-shadow: 2px 4px 22px 8px rgb(72, 199, 142, 0.25);
    }

    .columnCard-link {
        box-shadow: 2px 4px 22px 8px rgb(72, 95, 199, 0.25);
    }

    .defaultCard {
        box-shadow: 2px 4px 22px 8px rgb(245, 245, 245, 0.5);
    }

    .sml-tag {
        display: grid;
        grid-template-columns: repeat(auto-fit, 90px);
        grid-template-rows: auto;
    }

    .sml-tag>div:last-child {
        margin-bottom: 1.5rem !important;
    }

    /* about.php */
    @media screen and (max-width:900px) {
        .columnsAbout {
            display: block !important;
        }
    }
</style>