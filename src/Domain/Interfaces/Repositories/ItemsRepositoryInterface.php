<?php

namespace App\Domain\Interfaces\Repositories;

use App\Domain\Entities\Item;

interface ItemsRepositoryInterface
{
    /**
     * Crea un nuevo ítem en el repositorio.
     * @param Item $item El objeto Item a crear.
     * @return Item El ítem creado, incluyendo su ID asignado.
     */
    public function create(Item $item): Item;

    /**
     * Busca y devuelve todos los ítems.
     * @return array<Item> Un array con todos los objetos Item.
     */
    public function findAll(): array;
    
    /**
     * Busca un ítem por su ID.
     * @param int $id El ID del ítem a buscar.
     * @return Item|null El objeto Item si se encuentra, de lo contrario, null.
     */
    public function findById(int $id): ?Item;

    /**
     * Actualiza un ítem existente.
     * @param Item $item El objeto Item con los datos actualizados.
     * @return Item|null El ítem actualizado o null si no se encontró.
     */
    public function update(Item $item): ?Item;

    /**
     * Elimina un ítem por su ID.
     * @param int $id El ID del ítem a eliminar.
     * @return bool Verdadero si el ítem fue eliminado, falso si no se encontró.
     */
    public function delete(int $id): bool;
}
