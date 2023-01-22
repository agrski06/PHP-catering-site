<?php 
include_once("Controller.php");

class RegisterController extends Controller {
    function __construct() {
        Controller::__construct("../view/register.php");
    }
}