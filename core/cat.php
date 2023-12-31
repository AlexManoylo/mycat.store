<?php
session_start();
class Cat
{
    private $id;
    private $name;
    private $age;
    private $description;
    private $price;
    private $quantity;
    private $image;

    public function __construct($id, $name, $age, $description, $price, $quantity, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getImage()
    {
        return $this->image;
    }

}
