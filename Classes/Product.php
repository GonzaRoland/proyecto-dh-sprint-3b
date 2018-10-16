<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $description; //
    private $stock;
    private $brand;
    private $category;
    
    public function __construct($name, $price, $stock, $brand, $category, $description = null, $id = null)
    {
        $this->setId($id);
        $this->setProdName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setStock($stock);
        $this->setBrand($brand);
        $this->setCategory($category);
         
    }

   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    
    public function getProdName()
    {
        return $this->name;
    }

    public function setProdName($name)
    {
        $this->name = $name;
    }

    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

            
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    
}

