<?php

declare(strict_types=1);

namespace Src;

class Router
{
    private static ?Router $instance = null;

    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';
    private const METHOD_PUT = 'PUT';
    private const METHOD_DELETE = 'DELETE';

    private array $routes;
    private $pageError;

    private function __construct()
    {
    }

    public static function registerRouter(): self
    {
        if (null === self::$instance) {
            self::$instance = new Router();
        }

        return self::$instance;
    }

    public function get(string $path, callable $callback): self
    {
        $this->routeHandler(self::METHOD_GET, $path, $callback);

        return $this;
    }

    public function post(string $path, callable $callback): self
    {
        $this->routeHandler(self::METHOD_POST, $path, $callback);

        return $this;
    }

    public function put(string $path, callable $callback): self
    {
        $this->routeHandler(self::METHOD_PUT, $path, $callback);

        return $this;
    }

    public function routeHandler(
        string $method,
        string $path,
        callable $callback,
    ): void {
        $this->routes[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'callback' => $callback,
        ];
    }

    public function pageErrorHandler(int $code, callable $callback): self
    {
        if (empty($code)) {
            $code = 404;
        }
        header("HTTP/1.1 $code Not Found");
        $this->pageError = $callback;

        return $this;
    }

    public function run(): self
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;
        foreach ($this->routes as $route) {
            if (
                $route['path'] === $requestPath
                && $route['method'] === $method
            ) {
                $callback = $route['callback'];
            }
        }

        if (!$callback) {
            if (!empty($this->pageError)) {
                $callback = $this->pageError;
            }
        }

        call_user_func_array($callback, [array_merge($_GET, $_POST)]);

        return $this;
    }
}
