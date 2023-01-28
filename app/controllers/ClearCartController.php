<?php
include_once("../app/models/Cart.php");
include_once("../app/controllers/OrderController.php");

class ClearCartController {
    public function show() {
        $cart = new Cart();
        $userId = $_SESSION["userId"];
        $cart->setUserId($userId);
        $cartId = $cart->getMysqli()->query("select * from cart where userId='$userId'")->fetch_object()->id;
        $cart->setId($cartId);

        if($cart->clearCart()) {
            $temp = new OrderController();
            $temp->show();
            return;
        }
        $error = "Błąd czyszczenia koszyka";
        require_once("../view/customError.php");
    }
}