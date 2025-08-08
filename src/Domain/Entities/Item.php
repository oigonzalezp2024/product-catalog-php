<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\ItemInterface;

class Item implements ItemInterface
{
    private ?int $id = null;
    private string $title; // 'product' y 'title' se han unificado aquí
    private string $quantity;
    private string $price;
    private ?string $description = null;
    private ?array $main_image = null;
    private ?array $gallery_images = null;
    private ?array $qr_code = null;
    private ?string $main_attribute = null;
    private ?string $details = null;
    private ?string $image = null;
    private ?string $full_description = null;

    public function __construct(
        string $title, // El constructor ahora solo recibe 'title'
        string $quantity,
        string $price,
        ?int $id = null,
        ?string $description = null,
        ?array $main_image = null,
        ?array $gallery_images = null,
        ?array $qr_code = null,
        ?string $main_attribute = null,
        ?string $details = null,
        ?string $image = null,
        ?string $full_description = null
    ) {
        $this->title = $title;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->id = $id;
        $this->description = $description;
        $this->main_image = $main_image;
        $this->gallery_images = $gallery_images;
        $this->qr_code = $qr_code;
        $this->main_attribute = $main_attribute;
        $this->details = $details;
        $this->image = $image;
        $this->full_description = $full_description;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getMainImage(): ?array
    {
        return $this->main_image;
    }

    public function getGalleryImages(): ?array
    {
        return $this->gallery_images;
    }

    public function getQrCode(): ?array
    {
        return $this->qr_code;
    }

    public function getMainAttribute(): ?string
    {
        return $this->main_attribute;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getFullDescription(): ?string
    {
        return $this->full_description;
    }
}
