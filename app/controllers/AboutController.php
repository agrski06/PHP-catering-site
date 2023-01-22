<?php 
include_once("Controller.php");

class AboutController extends Controller {
    function __construct() {
        Controller::__construct("../view/about.php");
    }
}