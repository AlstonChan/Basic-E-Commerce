<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class) . '.php');
    require $path;
});

use Src\Router;

$routesPath = __DIR__ . '/../src/routes/';
$controllersPath = __DIR__ . '/../src/controllers/';

$router = Router::registerRouter();

$router->get('/', function () {
    require_once $GLOBALS['routesPath'] . 'home.php';
});

$router->get('/about_us', function () {
    require_once $GLOBALS['routesPath'] . 'about_us.php';
});

$router->get('/all_product', function () {
    require_once $GLOBALS['routesPath'] . 'all_product.php';
});

$router->get('/products', function ($params) {
    if (isset($params['id'])) {
        require $GLOBALS['routesPath'] . 'products/(id).php';
    } else {
        $host = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/all_product", true, 301);
        exit();
    }
});

$router->get('/account', function () {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/../src/controllers/session.php';

    if (
        !isset($_SESSION['user_id']) ||
        !isset($_SESSION['username']) ||
        !isset($_SESSION['email'])
    ) {
        require_once $GLOBALS['routesPath'] . 'error.php';
        exit();
    } else {
        require_once $GLOBALS['routesPath'] . 'account.php';
    }
});

$router->get('/auth', function ($params) {
    $host = $_SERVER['HTTP_HOST'];
    if (isset($params['type'])) {
        if ($params['type'] === 'login' || $params['type'] === 'signup') {
            require_once $GLOBALS['routesPath'] . 'auth.php';
        } elseif ($params['type'] === 'logout') {
            require_once $GLOBALS['controllersPath'] .
                'auth/process_logout.php';
        } else {
            header("Location: http://$host/auth?type=login", true, 301);
            exit();
        }
    } else {
        header("Location: http://$host/auth?type=login", true, 301);
        exit();
    }
});

$router->post('/auth', function ($params) {
    if (isset($params['type'])) {
        if ($params['type'] === 'login') {
            require_once $GLOBALS['controllersPath'] . 'auth/process_login.php';
        } elseif ($params['type'] === 'signup') {
            require_once $GLOBALS['controllersPath'] .
                'auth/process_signup.php';
        } else {
            require_once $GLOBALS['routesPath'] . 'error.php';
            exit();
        }
    } else {
        require_once $GLOBALS['routesPath'] . 'error.php';
        exit();
    }
});

require_once $controllersPath . '/fetch/fetch_products.php';
foreach ($arrangedProductsCategory as $value) {
    $router->get("/products/{$value}", function ($params) {
        require $GLOBALS['routesPath'] . 'products/[category].php';
    });
}

$router->pageErrorHandler(404, function () {
    require_once $GLOBALS['routesPath'] . 'error.php';
});

$router->run();
