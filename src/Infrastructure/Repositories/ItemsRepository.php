<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\ItemsRepositoryInterface;
use App\Domain\Entities\Item;

class ItemsRepository implements ItemsRepositoryInterface
{
    /**
     * @var array<Item>
     */
    private array $items = [];
    private array $products = [];
    private int $nextId = 1;

    // Constructor para inicializar con datos "precargados"
    public function __construct()
    {
        // Se utiliza el mismo método 'create' para los datos iniciales.
        // Esto garantiza que cada ítem reciba un ID de manera consistente.

        $this->products = $products = [
            [
                'id' => 1,
                'title' => 'Acqua di Giò Profumo (Hombre)',
                'main_attribute' => 'Aromático Acuático',
                'description' => 'Incienso, Notas Marinas, Pachulí',
                'image' => IMAGE_BASE_PATH . 'aqua_de_guio_profumo_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Profumo es una reinterpretación profunda y sofisticada de Acqua di Giò, con notas minerales y un corazón de incienso que evoca la fuerza del mar.',
                'price' => '77.00',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'aqua_de_guio_profumo_hombre.webp', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'aqua_de_guio_profumo_hombre.webp', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 2,
                'title' => 'Jean Paul Gaultier Le Male Ultra (Hombre)',
                'main_attribute' => 'Oriental Fougère',
                'description' => 'Vainilla, Pera, Canela',
                'image' => IMAGE_BASE_PATH . 'Jean Paul lemale ultra hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una versión intensa y audaz de Le Male, con una mezcla de menta, lavanda y vainilla que proyecta sensualidad y misterio.',
                'price' => '200.00',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'Jean Paul lemale ultra hombre.webp', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'Jean Paul lemale ultra hombre.webp', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 3,
                'title' => 'Jean Paul Gaultier Le Male Elixir (Hombre)',
                'main_attribute' => 'Amaderado Ambarino',
                'description' => 'Lavanda, Vainilla, Haba Tonka',
                'image' => IMAGE_BASE_PATH . 'jean_paul_lemale_elixir_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Le Male Elixir es la interpretación más rica y opulenta, con notas de miel y tabaco que lo hacen irresistible y perfecto para la noche.',
                'price' => '300.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'jean_paul_lemale_elixir_hombre.webp', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'jean_paul_lemale_elixir_hombre.webp', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 4,
                'title' => 'Orientica Oud Saffron (Hombre)',
                'main_attribute' => 'Oriental Amaderado',
                'description' => 'Azafrán, Oud, Cuero',
                'image' => IMAGE_BASE_PATH . 'orientica_oud_safron_hombre.jpg',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia de lujo con azafrán, oud y cuero, ideal para hombres que aprecian los aromas profundos y exóticos.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'orientica_oud_safron_hombre.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'orientica_oud_safron_hombre.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 5,
                'title' => '9 PM Negra (Hombre)',
                'main_attribute' => 'Oriental Especiado',
                'description' => 'Ambar, Vainilla, Manzana',
                'image' => IMAGE_BASE_PATH . 'p_9_pm_negra_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia nocturna e intensa con notas cálidas y especiadas, ideal para eventos especiales y para dejar una impresión duradera.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'p_9_pm_negra_hombre.webp', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'p_9_pm_negra_hombre.webp', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 6,
                'title' => 'Perfume Dolce & Gabbana Pour Homme',
                'main_attribute' => 'Aromático Fougère',
                'description' => 'Cítricos, Lavanda, Tabaco',
                'image' => IMAGE_BASE_PATH . 'perfume_dolce_gabbana_pour_homme.jpg',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Un clásico atemporal para hombres, con una mezcla de cítricos frescos, lavanda aromática y un toque de tabaco que lo hace elegante y masculino.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'perfume_dolce_gabbana_pour_homme.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'perfume_dolce_gabbana_pour_homme.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 7,
                'title' => 'Valentino Born in Roma (Hombre)',
                'main_attribute' => 'Amaderado Aromático',
                'description' => 'Vetiver, Jengibre, Salvia',
                'image' => IMAGE_BASE_PATH . 'valentino_born_in_roma_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Born in Roma Uomo es una fragancia moderna y fresca, con un corazón amaderado que celebra la herencia romana y la modernidad urbana.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . 'valentino_born_in_roma_hombre.webp', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . 'valentino_born_in_roma_hombre.webp', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
        ];

        foreach ($products as $product) {
            $pro = $product['title'];
            $main_attribute = $product['main_attribute'];
            $description = $product['description'];
            $image = $product['image'];
            $dimentions = $product['dimentions'];
            $full_description = $product['full_description'];
            $price = $product['price'];
            $main_image = $product['main_image'];
            $gallery_images = $product['gallery_images'];
            $qr_code = $product['qr_code'];
            $quantity = 1;
            $id = $product['id'];
            $details = $product['description'];

            $this->create(
                new Item(
                    $pro, 
                    $quantity, 
                    $price, 
                    $id,
                    $description,
                    $main_image,
                    $gallery_images,
                    $qr_code,
                    $main_attribute,
                    $details,
                    $image,
                    $full_description
                )
            );
        }
    }

    public function create(Item $item): Item
    {
        // Se clona el objeto para no modificar el original
        $newItem = clone $item;
        // $newItem->setId($this->nextId++);
        $this->items[] = $newItem;

        return $newItem;
    }

    public function findAll(): array
    {
        return $this->items;
    }

    public function findById(int $id): ?Item
    {
        foreach ($this->items as $item) {
            if ($item->getId() === $id) {
                return clone $item; // Se devuelve una copia para evitar cambios externos
            }
        }
        return null;
    }

    public function update(Item $item): ?Item
    {
        foreach ($this->items as $key => $existingItem) {
            if ($existingItem->getId() === $item->getId()) {
                $this->items[$key] = clone $item;
                return $this->items[$key];
            }
        }
        return null;
    }

    public function delete(int $id): bool
    {
        foreach ($this->items as $key => $item) {
            if ($item->getId() === $id) {
                unset($this->items[$key]);
                // Reindexar el array para evitar agujeros
                $this->items = array_values($this->items);
                return true;
            }
        }
        return false;
    }

    public function getItemDetailById(int $itemId): ?array
    {
        foreach ($this->items as $item) {
            if ($item->getId() === $itemId) {
                return [
                    'id' => $item->getId(),
                    'title' => $item->getTitle(),
                    'description' => $item->getDescription(),
                    'price' => $item->getPrice(),
                    'main_image' => $item->getMainImage(),
                    'gallery_images' => $item->getGalleryImages(),
                    'qr_code' => $item->getQrCode(),
                ];
            }
        }

        return null; // Devuelve null si no se encuentra ningún elemento con el ID
    }

    public function itemDetailOfCategory(): array
    {
        // Array con todos los datos de los productos/categorías
        // Las claves de alto nivel (ej. 'Perfumes para Hombre') actúan como nombres de categoría.
        $products_data = [
            'Perfumes para Hombre' => [
                'banner_image' => BANNER_BASE_PATH . 'men_perfumes_banner.svg', // ¡Asegúrate de crear este banner!
                'banner_description' => 'Dimensiones: 1200x300px',
                'items' => $this->products
            ],
        ];

        return $products_data;
    }
}
