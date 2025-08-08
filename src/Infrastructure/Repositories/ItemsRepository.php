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
    private int $nextId = 1;

    // Constructor para inicializar con datos "precargados"
    public function __construct()
    {
        // Se utiliza el mismo método 'create' para los datos iniciales.
        // Esto garantiza que cada ítem reciba un ID de manera consistente.
        $this->create(new Item('Bolsa 30x40', 2, 10000));
        $this->create(new Item('bolsas 35X41', 1, 50000));
        $this->create(new Item('bolsas 35X42', 1, 50000));
        $this->create(new Item('bolsas 35X43', 1, 50000));

        $products = [
            [
                'id' => '1',
                'title' => 'Acqua di Giò Profumo (Hombre)',
                'main_attribute' => 'Aromático Acuático',
                'description' => 'Incienso, Notas Marinas, Pachulí',
                'image' => IMAGE_BASE_PATH . 'aqua_de_guio_profumo_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Profumo es una reinterpretación profunda y sofisticada de Acqua di Giò, con notas minerales y un corazón de incienso que evoca la fuerza del mar.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => '2',
                'title' => 'Jean Paul Gaultier Le Male Ultra (Hombre)',
                'main_attribute' => 'Oriental Fougère',
                'description' => 'Vainilla, Pera, Canela',
                'image' => IMAGE_BASE_PATH . 'Jean Paul lemale ultra hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una versión intensa y audaz de Le Male, con una mezcla de menta, lavanda y vainilla que proyecta sensualidad y misterio.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => '3',
                'title' => 'Jean Paul Gaultier Le Male Elixir (Hombre)',
                'main_attribute' => 'Amaderado Ambarino',
                'description' => 'Lavanda, Vainilla, Haba Tonka',
                'image' => IMAGE_BASE_PATH . 'jean_paul_lemale_elixir_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Le Male Elixir es la interpretación más rica y opulenta, con notas de miel y tabaco que lo hacen irresistible y perfecto para la noche.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => '4',
                'title' => 'Orientica Oud Saffron (Hombre)',
                'main_attribute' => 'Oriental Amaderado',
                'description' => 'Azafrán, Oud, Cuero',
                'image' => IMAGE_BASE_PATH . 'orientica_oud_safron_hombre.jpg',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia de lujo con azafrán, oud y cuero, ideal para hombres que aprecian los aromas profundos y exóticos.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => '5',
                'title' => '9 PM Negra (Hombre)',
                'main_attribute' => 'Oriental Especiado',
                'description' => 'Ambar, Vainilla, Manzana',
                'image' => IMAGE_BASE_PATH . 'p_9_pm_negra_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia nocturna e intensa con notas cálidas y especiadas, ideal para eventos especiales y para dejar una impresión duradera.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => '6',
                'title' => 'Perfume Dolce & Gabbana Pour Homme',
                'main_attribute' => 'Aromático Fougère',
                'description' => 'Cítricos, Lavanda, Tabaco',
                'image' => IMAGE_BASE_PATH . 'perfume_dolce_gabbana_pour_homme.jpg',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Un clásico atemporal para hombres, con una mezcla de cítricos frescos, lavanda aromática y un toque de tabaco que lo hace elegante y masculino.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => '7',
                'title' => 'Valentino Born in Roma (Hombre)',
                'main_attribute' => 'Amaderado Aromático',
                'description' => 'Vetiver, Jengibre, Salvia',
                'image' => IMAGE_BASE_PATH . 'valentino_born_in_roma_hombre.webp',
                'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Born in Roma Uomo es una fragancia moderna y fresca, con un corazón amaderado que celebra la herencia romana y la modernidad urbana.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
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
            $quantity = 1;
            $price = $product['price'];
            $id = $product['id'];
            $this->create(new Item($pro, $quantity, $price, $id));
        }
    }

    public function create(Item $item): Item
    {
        // Se clona el objeto para no modificar el original
        $newItem = clone $item;
        $newItem->setId($this->nextId++);
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

    public function itemDetail(): array
    {
        $products = [
            [
                'id' => 'producto_ejemplo_001',
                'title' => 'Nombre Asombroso del Producto',
                'description' => 'Este es un producto innovador diseñado para simplificar tu vida. Con su tecnología de vanguardia y diseño ergonómico, ofrece una experiencia de usuario inigualable. Ideal para profesionales y entusiastas que buscan eficiencia y calidad. Disponible en varios colores y configuraciones para adaptarse a tus necesidades.<br><br>Fabricado con materiales sostenibles y procesos amigables con el medio ambiente, garantizando no solo un alto rendimiento sino también un impacto positivo.',
                'price' => '99.99',
                'main_image' => [
                    'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ],
            [
                'id' => 'producto_ejemplo_001',
                'title' => 'Nombre Asombroso del Producto',
                'description' => 'Este es un producto innovador diseñado para simplificar tu vida. Con su tecnología de vanguardia y diseño ergonómico, ofrece una experiencia de usuario inigualable. Ideal para profesionales y entusiastas que buscan eficiencia y calidad. Disponible en varios colores y configuraciones para adaptarse a tus necesidades.<br><br>Fabricado con materiales sostenibles y procesos amigables con el medio ambiente, garantizando no solo un alto rendimiento sino también un impacto positivo.',
                'price' => '99.99',
                'main_image' => [
                    'path' => 'assets/images/foto_1.png', // Asegúrate de que esta ruta sea correcta
                    'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                    'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                    'height' => '400'
                ],
                // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                'gallery_images' => [
                    ['path' => 'assets/images/foto_1.png', 'alt' => 'Producto vista lateral'],
                    ['path' => 'assets/images/foto_2.png', 'alt' => 'Producto detalle frontal'],
                    ['path' => 'assets/images/foto_3.png', 'alt' => 'Producto con accesorios'], // Séptima imagen de ejemplo
                ],
                'qr_code' => [
                    'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                    'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                    'size' => '150x150' // Tamaño para la generación del QR
                ]
            ]
        ];

        $product_data = $products[0];

        return $product_data;
    }

    public function itemDetailOfCategory(): array
    {
        // Array con todos los datos de los productos/categorías
        // Las claves de alto nivel (ej. 'Perfumes para Hombre') actúan como nombres de categoría.
        $products_data = [
            'Perfumes para Hombre' => [
                'banner_image' => BANNER_BASE_PATH . 'men_perfumes_banner.svg', // ¡Asegúrate de crear este banner!
                'banner_description' => 'Dimensiones: 1200x300px',
                'items' => [
                    [
                        'id' => '1',
                        'title' => 'Acqua di Giò Profumo (Hombre)',
                        'main_attribute' => 'Aromático Acuático',
                        'description' => 'Incienso, Notas Marinas, Pachulí',
                        'image' => IMAGE_BASE_PATH . 'aqua_de_guio_profumo_hombre.webp',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Profumo es una reinterpretación profunda y sofisticada de Acqua di Giò, con notas minerales y un corazón de incienso que evoca la fuerza del mar.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                    [
                        'id' => '2',
                        'title' => 'Jean Paul Gaultier Le Male Ultra (Hombre)',
                        'main_attribute' => 'Oriental Fougère',
                        'description' => 'Vainilla, Pera, Canela',
                        'image' => IMAGE_BASE_PATH . 'Jean Paul lemale ultra hombre.webp',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Una versión intensa y audaz de Le Male, con una mezcla de menta, lavanda y vainilla que proyecta sensualidad y misterio.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                    [
                        'id' => '3',
                        'title' => 'Jean Paul Gaultier Le Male Elixir (Hombre)',
                        'main_attribute' => 'Amaderado Ambarino',
                        'description' => 'Lavanda, Vainilla, Haba Tonka',
                        'image' => IMAGE_BASE_PATH . 'jean_paul_lemale_elixir_hombre.webp',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Le Male Elixir es la interpretación más rica y opulenta, con notas de miel y tabaco que lo hacen irresistible y perfecto para la noche.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                    [
                        'id' => '4',
                        'title' => 'Orientica Oud Saffron (Hombre)',
                        'main_attribute' => 'Oriental Amaderado',
                        'description' => 'Azafrán, Oud, Cuero',
                        'image' => IMAGE_BASE_PATH . 'orientica_oud_safron_hombre.jpg',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Una fragancia de lujo con azafrán, oud y cuero, ideal para hombres que aprecian los aromas profundos y exóticos.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                    [
                        'id' => '5',
                        'title' => '9 PM Negra (Hombre)',
                        'main_attribute' => 'Oriental Especiado',
                        'description' => 'Ambar, Vainilla, Manzana',
                        'image' => IMAGE_BASE_PATH . 'p_9_pm_negra_hombre.webp',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Una fragancia nocturna e intensa con notas cálidas y especiadas, ideal para eventos especiales y para dejar una impresión duradera.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                    [
                        'id' => '6',
                        'title' => 'Perfume Dolce & Gabbana Pour Homme',
                        'main_attribute' => 'Aromático Fougère',
                        'description' => 'Cítricos, Lavanda, Tabaco',
                        'image' => IMAGE_BASE_PATH . 'perfume_dolce_gabbana_pour_homme.jpg',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Un clásico atemporal para hombres, con una mezcla de cítricos frescos, lavanda aromática y un toque de tabaco que lo hace elegante y masculino.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                    [
                        'id' => '7',
                        'title' => 'Valentino Born in Roma (Hombre)',
                        'main_attribute' => 'Amaderado Aromático',
                        'description' => 'Vetiver, Jengibre, Salvia',
                        'image' => IMAGE_BASE_PATH . 'valentino_born_in_roma_hombre.webp',
                        'dimentions' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                        'full_description' => 'Born in Roma Uomo es una fragancia moderna y fresca, con un corazón amaderado que celebra la herencia romana y la modernidad urbana.',
                        'price' => '99.99',
                        'main_image' => [
                            'path' => IMAGE_BASE_PATH . '212sexy.jpg', // Asegúrate de que esta ruta sea correcta
                            'alt' => 'Imagen principal del Nombre Asombroso del Producto',
                            'width' => '600', // Dimensiones sugeridas para la imagen base (se escalarán con CSS)
                            'height' => '400'
                        ],
                        // Galería de imágenes (puedes añadir hasta 7 o más, según lo necesites)
                        'gallery_images' => [
                            ['path' => IMAGE_BASE_PATH . '212sexy.jpg', 'alt' => 'Producto vista lateral'],
                        ],
                        'qr_code' => [
                            'data_url' => 'https://www.tu-tienda.com/productos/nombre-asombroso-del-producto', // ¡CAMBIA ESTA URL A LA PÁGINA REAL DE TU PRODUCTO!
                            'alt' => 'Código QR de la página oficial del Nombre Asombroso del Producto',
                            'size' => '150x150' // Tamaño para la generación del QR
                        ]
                    ],
                ],
            ],
        ];

        return $products_data;
    }
}
