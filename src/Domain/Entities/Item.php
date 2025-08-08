<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\ItemInterface;

class Item implements ItemInterface
{
    // Hacemos que el ID sea opcional, ya sea con ?int para PHP 7.1+
    // o inicializándolo a null
    private ?int $id = null;
    private string $product;
    private string $quantity;
    private string $price;

    public function __construct(
        string $product,
        string $quantity,
        string $price,
        ?int $id = null // El ID se pasa como un parámetro opcional
    ) {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // Opcionalmente, puedes añadir un "setter" para el ID
    // Este método se usaría para asignar el ID después de guardar
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}
