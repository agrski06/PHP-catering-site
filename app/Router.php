<?php
class Router
{
    private $routes = [
        "home" => "../view/home.php",
        "ingredients" => "../view/ingredients.php",
        "orders" => "../view/orders.php",
        "about" => "../view/about.php",
        "account" => "../view/account.php"
    ];

    private $prevRoute = "";

    public function show($destination)
    {
        if (!isset($this->routes[$destination])) {
            require_once("../view/error404.php");
            return;
        }
        if ($this->prevRoute != $destination) {
            require_once $this->routes[$destination];
            $this->prevRoute = $destination;
        }
    }
}

// invoke router
$router = new Router();