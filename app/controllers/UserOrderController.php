<?php
include_once("../app/models/Order.php");

class UserOrderController {
    function show() {
        if (!isset($_SESSION["userId"])) {
            require_once("../view/login.php");
            return;
        }
        $order = new Order();
        $userId = $_SESSION["userId"];
        $order->setUserId($userId);
        $orderId = $order->getMysqli()->query("select * from order where userId='$userId'")->fetch_object()->id;
        $order->setId($orderId);
        $products = $order->getProducts();

        if ($products == -1) {
            $error = "Błąd wyświetlania zamówienia!";
            require_once("../view/customError.php");
            return;
        }

        require_once("../view/userOrder.php");
    }
}