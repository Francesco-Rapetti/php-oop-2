<?php

class User {
    private static $id = 0;

    function __construct() {
        $this->id += 1;
    }

    public function getId() {
        return self::$id;
    }
}