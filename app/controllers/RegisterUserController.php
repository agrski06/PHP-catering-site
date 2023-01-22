<?php
include_once("Controller.php");
include_once("../app/models/User.php");

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
            $_POST["lastname"],
            $_POST["email"])
        ) {
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                Controller::__construct("../view/invalidData.php");
                return;
            }
            if (!ctype_alnum($_POST["login"])) {
                Controller::__construct("../view/invalidData.php");
                return;
            }
            if (!ctype_alpha($_POST["firstname"]) || !ctype_alpha($_POST["lastname"])) {
                Controller::__construct("../view/invalidData.php");
                return;
            }
            $user = new User();
            $user->setUserName($_POST["login"]);
            $user->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));
            $user->setFirstName($_POST["firstname"]);
            $user->setLastName($_POST["lastname"]);
            $user->setEmail($_POST["email"]);

            if($user->saveToDB()) {
                Controller::__construct("../view/registerSuccess.php");
            } else {
                Controller::__construct("../view/userExistsError.php");
            }

        }
        else {
            Controller::__construct("../view/about.php");
        }
    }
}