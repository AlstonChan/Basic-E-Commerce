<?php
$homepageLink = "/";
$navItem = [
    ["title" => "Home", "link" => $homepageLink],
    ["title" => "About Us", "link" => $homepageLink . "about_us"],
    ["title" => "All Products", "link" => $homepageLink . "all_product"]
];

require  $_SERVER['DOCUMENT_ROOT'] . "/../src/controllers/fetch/fetch_products.php";

?>

<nav class="container navbar mt-3 mb-3" role="navigation" aria-label="main navigation">
    <div class="is-flex mx-3 navbar-break-show" x-data="{open: false}">
        <!-- navbar brand show only on small screen breakpoint -->
        <div class="navbar-brand my-0 navbar-break-show">
            <a href="<?php echo $homepageLink; ?>">
                <img src="/assets/logo.svg" width="168" height="42" style="vertical-align:middle">
            </a>
        </div>

        <!-- dropdown for small screen breakpoint -->
        <div :class="open ? 'is-active' : ''" class="ml-auto dropdown is-right defaultCard">
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
                        <a href="<?php echo $value["link"]; ?>" class="dropdown-item <?php if ($page === $value["title"]) echo "is-active" ?>">
                            <?php echo $value["title"]; ?>
                        </a>
                    <?php endforeach; ?>
                    <hr class="dropdown-divider">

                    <?php foreach ($arrangedProductsCategory as $value) : ?>
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
            <?php foreach ($navItem as $value) : ?>
                <a href="<?php echo $value["link"]; ?>" class="navbar-item <?php if ($page === $value["title"]) echo "is-active" ?>">
                    <?php echo $value["title"]; ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- middle brand  -->
        <div class="navbar-brand mx-auto my-0">
            <a href="<?php echo $homepageLink; ?>">
                <img src="/assets/logo.svg" width="168" height="42" style="vertical-align:middle">
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