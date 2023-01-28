<?php
include_once("Controller.php");

class LoginSuccessfulController extends Controller {
    function __construct() {
        Controller::__construct("../view/loginSuccessful.php");
    }
}