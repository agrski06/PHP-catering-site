<?php 
include_once("Controller.php");

class IngredientsController extends Controller {
    function __construct() {
        Controller::__construct("../view/ingredients.php");
    }

    function show() {
        // $products = [
        //     "productName" => "Sample",
        //     "imagePath" => "http:://example.com",
        //     "quantity" => 5
        // ];
        require_once("../view/ingredients.php");
        return;
    }
}