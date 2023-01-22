<?php

include_once("controllers/HomeController.php");
include_once("controllers/IngredientsController.php");
include_once("controllers/AboutController.php");
include_once("controllers/OrderController.php");
include_once("controllers/AccountController.php");
include_once("controllers/LoginController.php");
include_once("controllers/LoginUserController.php");
include_once("controllers/RegisterController.php");
include_once("controllers/RegisterUserController.php");
include_once("controllers/LogoutController.php");

class Router
{
    // private $home = new HomeController;
    // private $ingredients = new IngredientsController();
    // private $about = new AboutController();
    // private $registerUser = new RegisterUserController();

    private $routes = [];

    private $prevRoute = "";

    function __construct()
    {
        $this->routes = [
            "home" => new HomeController(),
            "ingredients" => new IngredientsController(),
            "orders" => new OrderController(),
            "about" => new AboutController(),
            "account" => new AccountController(),
            "login" => new LoginController(),
            "loginUser" => new LoginUserController(),
            "register" => new RegisterController(),
            "registerUser" => new RegisterUserController(),
            "logout" => new LogoutController()
        ];
    }

    public function show($destination)
    {
        if (!isset($this->routes[$destination])) {
            require_once("../view/error404.php");
            return;
        }
        if ($this->prevRoute != $destination) {
            $this->routes[$destination]->show();
            $this->prevRoute = $destination;
        }
    }

    public function showError($message)
    {
        $error = $message;
        require("../view/customError.php");
    }
}

// invoke router
$router = new Router();