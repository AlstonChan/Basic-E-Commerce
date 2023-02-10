<?php
$homepageLink = "/";
$navItem = [
    ["title" => "Home", "link" => $homepageLink],
    ["title" => "About Us", "link" => $homepageLink . "about_us"],
    ["title" => "All Products", "link" => $homepageLink . "all_product"]
];

require  $_SERVER['DOCUMENT_ROOT'] . "/../src/controllers/fetch/fetch_products.php";

?>

<nav class="container navbar mt-3 mb-3" role="navigation" aria-label="main navigation" x-data="{cart: false, user: false}">
    <div class="is-flex mx-3 navbar-break-show" x-data="{open: false}">
        <!-- navbar brand show only on small screen breakpoint -->
        <div class="navbar-brand my-0 navbar-break-show">
            <a href="<?php echo $homepageLink; ?>">
                <img src="/assets/logo.svg" width="168" height="42" style="vertical-align:middle">
            </a>
        </div>

        <!-- cart dropdown  -->
        <div :class="cart ? 'is-active' : ''" class="ml-auto dropdown is-right is-align-self-center">
            <div class="dropdown-trigger">
                <button x-on:click="cart = !cart" style="border:none" class="button mr-2" aria-haspopup="true" aria-controls="dropdown-menu2">
                    <figure class="image">
                        <img src="/assets/icon/cart.svg">
                    </figure>
                </button>
            </div>
            <div style="z-index:31" class="dropdown-menu" id="dropdown-menu2" role="menu">
                <div class="dropdown-content">
                    <div class="dropdown-item has-text-centered">
                        Cart Empty
                    </div>
                </div>
            </div>
        </div>

        <!-- user icon -->
        <div :class="user ? 'is-active' : ''" class="dropdown is-right is-align-self-center">
            <div class="dropdown-trigger">
                <button x-on:click="user = !user" style="border:none" class="button mr-2" aria-haspopup="true" aria-controls="dropdown-menu2">
                    <figure class="image">
                        <img src="/assets/icon/user.svg">
                    </figure>
                </button>
            </div>
            <div style="z-index:31" class="dropdown-menu" id="dropdown-menu2" role="menu">
                <div class="dropdown-content">
                    <a class="dropdown-item has-text-centered has-background-primary has-text-primary-light pr-4">
                        Sign up
                    </a>
                    <a class="dropdown-item has-text-centered pr-4">
                        Log in
                    </a>
                </div>
            </div>
        </div>

        <!-- dropdown for small screen breakpoint -->
        <div :class="open ? 'is-active' : ''" class="ml dropdown is-right defaultCard">

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
                        <a href="<?php echo "/products/{$value}"; ?>" class="dropdown-item <?php if ($page === $value) echo "is-active" ?>">
                            <?php echo ucfirst($value); ?>
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
                    <div :class="cart ? 'is-active' : ''" class="dropdown">
                        <div class="dropdown-trigger">
                            <button x-on:click="cart = !cart" style="border:none" class="button mr-2" aria-haspopup="true" aria-controls="dropdown-menu2">
                                <figure class="image">
                                    <img src="/assets/icon/cart.svg">
                                </figure>
                            </button>
                        </div>
                        <div style="z-index:31" class="dropdown-menu" id="dropdown-menu2" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-item has-text-centered">
                                    Cart Empty
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/auth?type=signup" class="button is-primary">
                        <strong>Sign up</strong>
                    </a>
                    <a href="/auth?type=login" class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>