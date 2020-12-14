<?php

abstract class HTTPMethod
{
    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";
    const Delete = "DELETE";
}

class Router
{
    protected array $routes;

    public function __construct()
    {
        $this->routes = array();
    }

    public function add_route(string $method, string $uri, Controller $controller)
    {
        $this->routes[$uri] = array("method" => $method, "controller" => $controller);
    }

    public function serv($uri)
    {
        return $this->routes[$uri]["controller"]->mount();
    }
}
