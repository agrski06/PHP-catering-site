<?php
include_once("../app/Database.php");
class User
{
    private $id;
    private $firstName;
    private $lastName;
    private $userName;
    private $password;
    private $email;
    private $cartId;

    private $db;

    function __construct()
    {
        $this->db = new DataBase("localhost", "root", "", "catering");
    }

    public function saveToDB()
    {
        // insert user without cartId
        try {
            $this->db->insert("insert into user 
            (firstName, lastName, userName, password, email) 
            values ('$this->firstName', '$this->lastName', '$this->userName', 
            '$this->password', '$this->email' )");
        } catch (\Throwable $th) {
            return false;
        }
        
        $idRes = $this->db->getMysqli()->query("select id from user where userName='$this->userName'");
        $id = $idRes->fetch_object()->id;

        // create cart for user
        $this->db->insert("insert into cart (userID) values ($id)");
        $cartIdRes = $this->db->getMysqli()->query("select id from cart where userId=$id");
        $cartId = $cartIdRes->fetch_object()->id;

        //update cartID for user
        $idRes = $this->db->getMysqli()->query("update user set cartId=$cartId where id=$id");
        return true;
    }

    public function read($userId)
    {
        try {
            $response = $this->db->getMysqli()->query("select * from user where id=$userId")->fetch_object();
            
            $this->id = $response->id;
            $this->firstName = $response->firstName;
            $this->lastName = $response->lastName;
            $this->userName = $response->userName;
            $this->password = $response->password;
            $this->email = $response->email;
            $this->cartId = $response->cartId;
        } catch (\Throwable $th) {
            return false;
        }

        return true;
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    // GETTERS SETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCartId()
    {
        return $this->cartId;
    }

    public function setCartId($cartId)
    {
        $this->cartId = $cartId;
    }

}