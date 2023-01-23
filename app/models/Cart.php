<?php
include_once("../app/Database.php");

class Cart {
    protected $id;
    protected $userId;
    private $db;

    function __construct() {
        $this->db = new DataBase("localhost", "root", "", "catering");
    }

    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    // SETTER
    function setId($id) {
        $this->id = $id;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    // return 0 if cart is empty
    public function getProducts() {
        try {
            if ($this->db->getMysqli()->query("select * from productcart where cartId='$this->id'")->num_rows==0) {
                //cart empty
                return array();
            }
            $prcart = $this->db->getMysqli()->query("select * from productcart where cartId='$this->id'")->fetch_all();
            $products = array();

            foreach ($prcart as $obj) {
                $prId = $obj[0];
                $quantity = $obj[2];
                $product = $this->db->getMysqli()->query("select * from product where id='$prId'")->fetch_object();
                array_push($products, [
                    "productName" => $product->name,
                    "productPrice" => $product->price,
                    "productImage" => $product->imageLink,
                    "quantity" => $quantity
                ]);
            }
            
            return $products;
        } catch (\Throwable $th) {
            return -1;
        }

    }

    public function clearCart() {
        try {
            
            if ($this->db->getMysqli()->query("select * from productcart where cartId='$this->id'")->num_rows==0) {
                //cart empty
                return true;
            }
            $this->db->getMysqli()->query("delete from productcart where cartId='$this->id'");
            
        } catch (\Throwable $th) {
            return false;
        }
        return true;
    }

    public function getMysqli() {
        return $this->db->getMysqli();
    }
}
