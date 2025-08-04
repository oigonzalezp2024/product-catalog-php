<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\ItemInterface;

class Item implements ItemInterface
{
    private $product;
    private $quantity;
    private $price;

    public function __construct(
        string $product,
        string $quantity,
        string $price
    ) {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    function getProduct()
    {
        return $this->product;
    }
    function getQuantity()
    {
        return $this->quantity;
    }
    function getPrice()
    {
        return $this->price;
    }
}
