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

$router->get('/products', function ($params) {
    if (isset($params['id'])) {
        require $GLOBALS['path'] . "products/(id).php";
    } else {
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/all_product", true, 301);
        exit;
    }
});

$router->get('/auth', function ($params) {
    $host  = $_SERVER['HTTP_HOST'];
    if (isset($params['type'])) {
        if ($params['type'] === 'login' || $params['type'] === 'signup') {
            require_once $GLOBALS['path'] . 'auth.php';
        } else {
            header("Location: http://$host/auth?type=login", true, 301);
            exit;
        }
    } else {
        header("Location: http://$host/auth?type=login", true, 301);
        exit;
    }
});

require_once  $path . "fetch/fetch_products.php";
foreach ($arrangedProductsCategory as $value) {
    $router->get("/products/{$value}", function ($params) {
        require $GLOBALS['path'] . "products/[category].php";
    });
}

$router->pageErrorHandler(404, function () {
    require_once  $GLOBALS['path'] . 'error.php';
});

$router->run();
