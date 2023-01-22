<?php 
include_once("Controller.php");

class AccountController extends Controller {
    function __construct() {
        Controller::__construct("../view/account.php");
    }
}