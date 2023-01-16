<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/basic-e-commerce/public/assets/products.json";
$data = json_decode(file_get_contents($file), true);

$rawCategory = [];

foreach ($data['products'] as $value) {
    $rawCategory[] = $value['category'];
}

$arrangedCategory = array_values(array_unique($rawCategory));
?>


<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </a>

    <div id="productsCategory" class="navbar-menu">
        <div class="navbar-start mx-auto">
            <?php
            foreach ($arrangedCategory as $value) {
                echo '<a class="navbar-item">' . ucfirst($value) . "</a>";
            }
            ?>
        </div>
    </div>
</nav>