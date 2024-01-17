<?php

class Cart
{
    public array $items;
    public int $total;
    private Cart $istance;

    private function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }

    public static function getInstance()
    {
        if (!isset(self::$istance)) {
            self::$istance = new Cart();
        }
        return self::$istance;
    }

    public function addItem(Product $product)
    {
        $this->items[] = $product;
        $this->total += $product->price;
    }

    public function removeItem(Product $product)
    {
        $this->items = array_filter($this->items, function ($item) use ($product) {
            return $item->name !== $product->name;
        });
        $this->total -= $product->price;
    }
}
