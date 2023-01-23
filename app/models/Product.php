<?php
include_once("../app/Database.php");

class Product
{
    protected $id;
    protected $apiId;
    protected $name;
    protected $price;
    protected $imageLink;

    private $db;

    function __construct() {
        $this->db = new DataBase("localhost", "root", "", "catering");
    }

    // GETTERS
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImageLink() {
        return $this->imageLink;
    }

    // SETTERS
    public function setName(string $name) {
        $this->name = $name;
    }

    public function setPrice(string $price) {
        $this->price = $price;
    }

    public function setImageLink(string $imageLink) {
        $this->imageLink = $imageLink;
    }

    public function setApiId(string $id) {
        $this->apiId = $id;
    }

    public function saveToDB() {
        try {
            // if product not in database, add product
            if($this->db->getMysqli()->query("select * from Product where apiId='$this->apiId'")->num_rows == 0) {
                $this->db->insert("insert into Product 
                (apiId, name, price, imageLink) 
                values ('$this->apiId', '$this->name', '$this->price', '$this->imageLink')");
            }
            $res = $this->db->getMysqli()->query("select * from Product where apiId='$this->apiId'")->fetch_object();
            $this->id = $res->id;
            $userId = $_SESSION["userId"];
            $cartId = $this->db->getMysqli()->query("select * from cart where userId='$userId'")->fetch_object()->id;
            // if product not in cart
            if($this->db->getMysqli()->query("select * from productCart where productId='$this->id' AND cartId='$cartId'")->num_rows == 0) {
                $this->db->insert("insert into productCart 
                (productId, cartId, quantity) 
                values ('$this->id', '$cartId', 1)");
            }
            else {
                $quantity = $this->db->getMysqli()->query("select * from productCart where productId='$this->id' AND cartId='$cartId'")->fetch_object()->quantity;
                $quantity++;
                $this->db->getMysqli()->query("update productCart set quantity=$quantity where productId='$this->id' AND cartId='$cartId'");
            }
        } catch (\Throwable $th) {
            return false;
        }

        return true;
    }

}