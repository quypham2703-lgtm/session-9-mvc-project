<?php
class Router {
    public function handleRequest() {
        $url = $_GET['url'] ?? 'product/index';
        $url = explode('/', $url);

        $controllerName = ucfirst($url[0]) . 'Controller';
        $method = $url[1] ?? 'index';

        require_once "../app/controllers/$controllerName.php";

        $controller = new $controllerName();
        $controller->$method();
    }
}
