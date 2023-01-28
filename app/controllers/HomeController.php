<?php
include_once("Controller.php");

class HomeController extends Controller {
    function __construct() {
        Controller::__construct("../view/home.php");
    }
}