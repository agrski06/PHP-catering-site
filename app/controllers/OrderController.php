<?php
include_once("Controller.php");

class OrderController extends Controller {
    function __construct() {
        Controller::__construct("../view/orders.php");
    }
}