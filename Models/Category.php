<?php

class Category {
    public $name;
    public $image;
    public $description;
    public $products;
    public function __construct($name, $image, $description, array $products = []) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public function setProducts($products) {
        $this->products = $products;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }
}