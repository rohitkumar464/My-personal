<?php
declare(strict_types=1);
final class Router
{
    private array $routes = ['GET' => [], 'POST' => []];
    public function get(string $page, callable $action): void
    {
        $this->routes['GET'][$page] = $action;
    }
    public function post(string $page, callable $action): void
    {
        $this->routes['POST'][$page] = $action;
    }
    public function dispatch(string $method, string $page): void
    {
        $action = $this->routes[$method][strtolower(trim($page))] ?? null;
        if (!$action) {
            http_response_code(404);
            $action = $this->routes['GET']['home'];
        }
        $action();
    }
}
