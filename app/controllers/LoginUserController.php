<?php

class LoginUserController
{
    private $isError;
    function __construct()
    {
        $db = new DataBase("localhost", "root", "", "catering");
        $this->isError = false;

        if (isset($_POST["login"], $_POST["password"])) {
            if (!ctype_alnum($_POST["login"])) {
                $this->isError = true;
            }
            $login = $_POST["login"];
            $id = -1;

            $sql = "SELECT * FROM user WHERE userName='$login'";
            if ($result = $db->getMysqli()->query($sql)) {
                $ile = $result->num_rows;
                if ($ile == 1) {
                    $row = $result->fetch_object();
                    $hash = $row->password;
                    if (password_verify($_POST["password"], $hash))
                        $id = $row->id;

                }
            }
            if($id==-1) {
                $this->isError = true;
            } 
            else {
                $_SESSION["userId"] = $id;
            }

        } else {
            $this->isError = true;
        }
    }

    function show()
    {
        if ($this->isError) {
            require_once("../view/invalidData.php");
            $this->isError = false;
        }
        else {
            require_once("../view/loginSuccess.php");
        }
    }

}