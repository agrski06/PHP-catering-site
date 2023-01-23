<?php 
include_once("Controller.php");
include_once("../app/models/User.php");

class AccountController {
    function show() {
        $user = new User();
        $user->read($_SESSION["userId"]);

        require_once("../view/account.php");
    }
}