<?php
include_once("../app/models/User.php");
include_once("../app/controllers/AccountController.php");

class UpdateUserController {
    function show() {
        $user = new User();
        $errFlag = false;

        $user->read($_SESSION["userId"]);
        $login = $_POST["login"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];

        if ($login != "") {
            $errFlag = $user->updateLogin($login) ? $errFlag : true;
        }
        if ($password != "") {
            $errFlag = $user->updatePassword(password_hash($password, PASSWORD_DEFAULT)) ? $errFlag : true;
        }
        if ($firstname != "") {
            $errFlag = $user->updateFirstName($firstname) ? $errFlag : true;
        }
        if ($lastname != "") {
            $errFlag = $user->updateLastName($lastname) ? $errFlag : true;
        }
        if ($email != "") {
            $errFlag = $user->updateEmail($email) ? $errFlag : true;
        }

        if ($errFlag) {
            $error = "Niepowodzenie zmiany danych!";
            require_once("../view/customError.php");
            return;
        }
        $ac = new AccountController();
        $ac->show();
    }
}