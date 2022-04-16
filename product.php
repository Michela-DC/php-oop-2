<?php

class Product {

    public $category;
    public $type;
    public $species;
    public $brand;
    public $price;

    function __construct($_category, $_type, $_species, $_brand, $_price){
        $this->category = $_category;
        $this->type = $_type;
        $this->species = $_species;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}
 