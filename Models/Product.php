<?php
require_once __DIR__ ."/Category.php";

class Product {
    public $category;
    public $image;
    public $name;
    public $description;
    public $price;

    public function __construct(Category $category, $image, $name, $description, $price) {
        $this->category = $category;
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}