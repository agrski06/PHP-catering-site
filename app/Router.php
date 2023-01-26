<?php

class Router
{

    private $routes = [];

    private $prevRoute = "";

    function __construct()
    {
        foreach (glob("../app/controllers/*.php") as $filename) {
            include_once $filename;
        }
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
            "logout" => new LogoutController(),
            "addToCart" => new AddToCartIngredientController(),
            "loginSuccessful" => new LoginSuccessfulController(),
            "clearCart" => new ClearCartController(),
            "makeOrder" => new MakeOrderController(),
            "userOrder" => new UserOrderController(),
            "clearOrders" => new ClearOrdersController(),
            "updateUser" => new UpdateUserController()
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

    public function getRoutes()
    {
        return $this->routes;
    }
}

// invoke router
$router = new Router();