<?php
class Product
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $image;

    // GETTERS
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    // SETTERS
    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setPrice(string $price) {
        $this->price = $price;
    }

    public function setImage(string $image) {
        $this->image = $image;
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