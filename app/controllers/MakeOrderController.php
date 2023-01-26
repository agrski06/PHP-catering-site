<?php
include_once("../app/models/Order.php");
include_once("../app/models/Cart.php");

class MakeOrderController {
    public function show() {
        $order = new Order();
        $cart = new Cart();
        $userId = $_SESSION["userId"];
        
        $cartId = $cart->getMysqli()->query("select * from cart where userId='$userId'")->fetch_object()->id;

        $cart->setId($cartId);
        $cart->setUserId($userId);

        $order->setUserId($userId);

        $products = $cart->getProducts();
        if ($order->saveToDB($products)) {
            $cart->clearCart();
            require_once("../view/makeOrder.php");
            return;
        }
        $error = "Błąd zapisu zamówienia";
        require_once("../view/customError.php");
    }
}