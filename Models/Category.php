<?php

class Category {
    public $name;
    public $image;
    public $description;
    public function __construct($name, $image, $description) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }
}