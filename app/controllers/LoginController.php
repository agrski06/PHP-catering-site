<?php
include_once("Controller.php");

class LoginController extends Controller {
    function __construct() {
        Controller::__construct("../view/login.php");
    }
}