<?php

$productsFile = $_SERVER['DOCUMENT_ROOT'] . "/assets/products.json";
$productsData = json_decode(file_get_contents($productsFile), true);

$rawProductsCategory = [];

foreach ($productsData['products'] as $value) {
    $rawProductsCategory[] = $value['category'];
}

$arrangedProductsCategory = array_values(array_unique($rawProductsCategory));
