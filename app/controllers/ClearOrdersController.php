<?php
include_once("../app/models/Order.php");
include_once("../app/controllers/OrderController.php");
include_once("../app/controllers/AccountController.php");

class ClearOrdersController {
    public function show() {
        $order = new Order();
        $userId = $_SESSION["userId"];

        if($order->clearOrderForUser($_SESSION["userId"])) {
            $ac = new AccountController();
            $ac->show();
        } else {
            $error = "Błąd usuwania zamówień";
            require_once("../view/customError.php");
        }
    }
}