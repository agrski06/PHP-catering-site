<?php
class Product
{
    protected $id;
    protected $apiId;
    protected $name;
    protected $price;
    protected $imageLink;

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