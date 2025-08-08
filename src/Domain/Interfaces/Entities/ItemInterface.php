<?php

namespace App\Domain\Interfaces\Entities;

interface ItemInterface
{
    /**
     * Obtiene el ID del ítem. Puede ser nulo si el ítem aún no ha sido guardado.
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Establece el ID del ítem. Se usa típicamente después de guardar el ítem en un repositorio.
     * @param int $id
     */
    public function setId(int $id): void;

    /**
     * Obtiene la cantidad del ítem en stock o para la venta.
     * @return string
     */
    public function getQuantity(): string;

    /**
     * Obtiene el precio del ítem.
     * @return string
     */
    public function getPrice(): string;
    
    /**
     * Obtiene el título o nombre del producto.
     * @return string
     */
    public function getTitle(): string;

    /**
     * Obtiene una descripción breve del producto.
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Obtiene la información de la imagen principal del producto.
     * @return array|null
     */
    public function getMainImage(): ?array;

    /**
     * Obtiene un array con la información de las imágenes de la galería del producto.
     * @return array|null
     */
    public function getGalleryImages(): ?array;

    /**
     * Obtiene un array con los datos del código QR del producto.
     * @return array|null
     */
    public function getQrCode(): ?array;

    /**
     * Obtiene el atributo principal del producto (ej. "Aromático Acuático").
     * @return string|null
     */
    public function getMainAttribute(): ?string;

    /**
     * Obtiene un resumen de los detalles del producto (ej. "Incienso, Notas Marinas, Pachulí").
     * @return string|null
     */
    public function getDetails(): ?string;

    /**
     * Obtiene la ruta de la imagen del producto (útil para vistas de categoría).
     * @return string|null
     */
    public function getImage(): ?string;

    /**
     * Obtiene la descripción completa y detallada del producto.
     * @return string|null
     */
    public function getFullDescription(): ?string;
}
