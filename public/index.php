<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . "/../" . lcfirst(str_replace('\\', '/', $class) . ".php");
    require $path;
});

use Src\Router;

$path = __DIR__ . "/../src/controllers/";

$router = Router::registerRouter();

$router->get('/', function () {
    require_once  $GLOBALS['path'] . 'home.php';
});

$router->get('/about_us', function () {
    require_once  $GLOBALS['path'] . 'about_us.php';
});

$router->get('/all_product', function () {
    require_once  $GLOBALS['path'] . 'all_product.php';
});

$router->get('/products', function () {
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/all_product", true, 301);
    exit;
});

require_once  $path . "fetch/fetch_products.php";
foreach ($arrangedProductsCategory as $value) {
    $router->get("/products/{$value}", function ($value) {
        require $GLOBALS['path'] . "products/[slug].php";
    });
}

$router->pageErrorHandler(404, function () {
    require_once  $GLOBALS['path'] . 'error.php';
});

$router->run();
