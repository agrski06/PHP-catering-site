<?php 
include_once("Controller.php");
include_once("IngredientsController.php");
include_once("../app/models/Product.php");

class AddToCartIngredientController {
    function show() {

        // $_SESSION["apiId"] = $response['idMeal'];
        // $_SESSION["thumbnailLink"] = $thumbnailLink;
        // $_SESSION["name"] = $name;

        if (!isset($_SESSION["userId"])) {
            require_once("../view/login.php");
            return;
        }

        $product = new Product();
        $product->setName($_SESSION["name"]);
        $product->setImageLink($_SESSION["thumbnailLink"]);
        $product->setApiId($_SESSION["apiId"]);
        $product->setPrice(rand(20, 30));
        
        if ($product->saveToDB()) {
            require_once("../view/addToCart.php");
        }
        else {
            $error = "Błąd zapisu danych do wózka!";
            require_once("../view/customError.php");
            return;
        }

        $temp = new IngredientsController();
        $temp->show();
    }
}