<?php
include_once("../app/Database.php");

class Order {
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

    public function saveToDB($products) {
        try {
            $this->db->insert("insert into `order` 
            (userId) 
            values ('$this->userId')");
        } catch (\Throwable $th) {
            print("<br><br><br><br><br><br><br><br><br><br><br>");
            return false;
        }

        $res = $this->db->getMysqli()->query("SELECT LAST_INSERT_ID();")->fetch_array();
        $this->id = $res["LAST_INSERT_ID()"];

        foreach ($products as $prod) {
            $prId = $prod["productId"];
            $quant = $prod["quantity"];
            try {
                $this->db->insert("INSERT into productorder 
                (productid, orderId, quantity) 
                values ('$prId', '$this->id', '$quant')");
            } catch (\Throwable $th) {
                return false;
            }
        }

        return true;
    }

    // return empty array if order is empty
    public function getOrdersForUserId($userId) {
        try {
            if ($this->db->getMysqli()->query("select * from `order` where userId='$userId'")->num_rows==0) {
                //order empty
                return array();
            }
            $orders = $this->db->getMysqli()->query("select * from `order` where userId='$userId'")->fetch_all();
            $resultOrders = array();
            $i = 0;

            foreach ($orders as $obj) {
                $orderId = $obj[0];
                $productsFromOrder = $this->db->getMysqli()->query("select * from productorder where orderId='$orderId'")->fetch_all();
                $products = array(); // products for single order

                foreach ($productsFromOrder as $prodOrd) { // fill products (for one order) array
                    $prId = $prodOrd[0];
                    $product = $this->db->getMysqli()->query("select * from product where id='$prId'")->fetch_object();
                    array_push($products, [
                        "productName" => $product->name,
                        "productPrice" => $product->price,
                        "productImage" => $product->imageLink,
                        "quantity" => $prodOrd[2]
                    ]);
                }

                // resulting array [ [orderNumber] => [productsForOrder] ]
                array_push($resultOrders, [
                    $i => $products
                ]);

                $i++;
            }
            
            return $resultOrders;
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            return -1;
        }

    }

    public function clearOrder() {
        try {
            
            if ($this->db->getMysqli()->query("select * from productorder where orderId='$this->id'")->num_rows==0) {
                //order empty
                return true;
            }
            $this->db->getMysqli()->query("delete from productorder where orderId='$this->id'");
            
        } catch (\Throwable $th) {
            return false;
        }
        return true;
    }

    public function clearOrderForUser($userId) {
        try {
            $ordersId = $this->db->getMysqli()->query("select id from `order` where userId='$userId'")->fetch_all();
            
            foreach ($ordersId as $value) {
                $orderId = $value[0];
                $this->db->getMysqli()->query("delete from productorder where orderId='$orderId'");
                $this->db->getMysqli()->query("delete from `order` where id='$orderId'");
            }
            
        } catch (\Throwable $th) {
            return false;
        }
        return true;
    }

    public function getMysqli() {
        return $this->db->getMysqli();
    }
}
