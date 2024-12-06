<?php

namespace App\RMVC\Route;

class RouteConfiguration
{
    public string $route;
    public string $controller;
    public string $action;

    private string $name;
    private string $middleware;

    /**
     * @param string $route
     * @param string $action
     * @param string $controller
     */
    public function __construct(string $route, string $controller, string $action)
    {
        $this->route = $route;
        $this->action = $action;
        $this->controller = $controller;
    }

    public function name(string $name): RouteConfiguration
    {
        $this->name = $name;
        return $this;
    }

    public function middleware(string $middleware): RouteConfiguration
    {
        $this->middleware = $middleware;
        return $this;
    }
}