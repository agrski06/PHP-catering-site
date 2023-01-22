<?php
class Cart {
    protected $id;
    protected $userId;

    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    // SETTER
    function setUserId($userId) {
        $this->userId = $userId;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}