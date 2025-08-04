<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\ItemsRepositoryInterface;
use App\Domain\Entities\Item;

class ItemsRepository implements ItemsRepositoryInterface
{
    function findItems()
    {
        $items = [];
        $product = 'Bolsa 30x40';
        $quantity = 2;
        $price = 10000;
        $item = new Item(
            $product,
            $quantity,
            $price
        );
        array_push($items, $item);
        $product = 'bolsas 35X45';
        $quantity = 1;
        $price = 50000;
        $item = new Item(
            $product,
            $quantity,
            $price
        );
        array_push($items, $item);

        $myItems = [
            [
                'product' => $items[0]->getProduct(),
                'quantity' => $items[0]->getQuantity(),
                'price' => $items[0]->getPrice(),
            ],
            [
                'product' => $items[1]->getProduct(),
                'quantity' => $items[1]->getQuantity(),
                'price' => $items[1]->getPrice(),
            ]
        ];
        return $myItems;
    }
}