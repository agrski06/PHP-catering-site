<?php 
include_once("Controller.php");
include_once("../app/models/User.php");
include_once("../app/models/Order.php");

class AccountController {
    function show() {
        if (!isset($_SESSION["userId"])) {
            require_once("../view/home.php");
            return;
        }
        $user = new User();
        $user->read($_SESSION["userId"]);

        $order = new Order();
        $orders = $order->getOrdersForUserId($_SESSION["userId"]);
        require_once("../view/account.php");
    }
}