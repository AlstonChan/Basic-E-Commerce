<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/basic-e-commerce/public/assets/products.json";
$data = json_decode(file_get_contents($file), true);

$rawCategory = [];

foreach ($data['products'] as $value) {
    $rawCategory[] = $value['category'];
}

$arrangedCategory = array_values(array_unique($rawCategory));
?>


<nav class="navbar is-primary navbar-break-hidden-collapse" role="navigation" aria-label="main navigation">
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