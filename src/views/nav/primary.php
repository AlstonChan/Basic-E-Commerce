<?php
$navItem = [["title" => "Home"], ["title" => "About Us"], ["title" => "All Products"]];

$file = $_SERVER['DOCUMENT_ROOT'] . "/basic-e-commerce/public/assets/products.json";
$data = json_decode(file_get_contents($file), true);

$rawCategory = [];

foreach ($data['products'] as $value) {
    $rawCategory[] = $value['category'];
}

$arrangedCategory = array_values(array_unique($rawCategory));
?>

<nav class="container navbar mt-3 mb-3" role="navigation" aria-label="main navigation">
    <div class="is-flex mx-3 navbar-break-show" x-data="{open: false}">
        <!-- navbar brand show only on small screen breakpoint -->
        <div class="navbar-brand my-0 navbar-break-show">
            <a href="/basic-e-commerce/src/">
                <img src="/basic-e-commerce/public/assets/logo.svg" width="168" height="42" style="vertical-align:middle">
            </a>
        </div>

        <!-- dropdown for small screen breakpoint -->
        <div :class="open ? 'is-active' : ''" class="ml-auto dropdown is-right">
            <!-- Hamburger -->
            <a x-on:click="open = !open" role="button" class="navbar-burger dropdown-trigger" aria-controls="dropdown-menu" aria-haspopup="true" aria-label="menu" aria-expanded="false" data-target="topNavBar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
            <!-- dropdown content  -->
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                    <?php foreach ($navItem as $value) : ?>
                        <a class="dropdown-item">
                            <?php echo $value["title"]; ?>
                        </a>
                    <?php endforeach; ?>
                    <hr class="dropdown-divider">

                    <?php foreach ($arrangedCategory as $value) : ?>
                        <a class="dropdown-item">
                            <?php echo $value; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

    <!-- main navbar on larger screen  -->
    <div id="topNavBar" class="navbar-menu">
        <!-- left  -->
        <div class="navbar-start">
            <a class="navbar-item">
                Home
            </a>
            <a class="navbar-item">
                About Us
            </a>
            <a class="navbar-item">
                All Products
            </a>
        </div>

        <!-- middle brand  -->
        <div class="navbar-brand mx-auto my-0">
            <a href="/basic-e-commerce/src/">
                <img src="/basic-e-commerce/public/assets/logo.svg" width="168" height="42" style="vertical-align:middle">
            </a>
        </div>

        <!-- right  -->
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>