<?php
include_once("Controller.php");

class RegisterUserController extends Controller
{
    protected $username;
    protected $password;
    protected $firstName;
    protected $lastName;

    function __construct()
    {
        if (
            isset($_POST["login"],
            $_POST["password"],
            $_POST["firstname"],
            $_POST["lastname"])
        ) {
            Controller::__construct("../view/home.php");
        }
        else {
            Controller::__construct("../view/about.php");
        }
    }
}