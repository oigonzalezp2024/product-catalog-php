<?php

// config.php

// Define la ruta base donde se encuentran tus imágenes de productos y banners.
define('IMAGE_BASE_PATH', '../images/'); 
define('BANNER_BASE_PATH', '../images/banners/'); 

// Información global del negocio
$business_info = [
    'company_name' => 'VEUD | PERFUMERIA', // Nombre de tu negocio
    'catalog_title' => 'CATÁLOGO DE GENERAL DE PERFUMERIA UNISEX',
    'catalog_slogan' => 'Descubre la esencia que te define.', // Eslogan o mensaje principal
    'social_media_handle' => '@tu_perfumeria_online', // Tu handle de redes sociales
    'footer_text' => '2025 - babull.com.co', // Texto del pie de página
    'main_header_banner_image' => BANNER_BASE_PATH . 'main_header_banner.avif', // Ruta del banner principal del header
    'main_header_banner_alt' => 'Explora nuestra colección de perfumes y ofertas especiales', // Texto alternativo del banner principal
    'main_header_banner_width' => 1920, // Ancho ideal para el banner principal
    'main_header_banner_height' => 400, // Alto ideal para el banner principal
    'meta_description' => 'Descubre nuestra exclusiva colección de perfumes de lujo y fragancias para hombre y mujer. ¡Explora los aromas más exclusivos y encuentra tu esencia ideal!', // Nueva meta descripción para SEO
];

// Array con todos los datos de los productos/categorías
// Las claves de alto nivel (ej. 'Perfumes para Hombre') actúan como nombres de categoría.
$products_data = [
    'Perfumes Unisex' => [
        'banner_image' => BANNER_BASE_PATH . 'unisex_perfumes_banner.svg', // ¡Asegúrate de crear este banner!
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'Ahly Corpus Unisex',
                'main_attribute' => 'Amaderado Especiado',
                'details' => 'Intenso, Cálido, Misterioso',
                'image' => IMAGE_BASE_PATH . 'ahly_corpus_unisex.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Importante: Verifica y actualiza las dimensiones reales de tu imagen!
                'full_description' => 'Una fragancia unisex con profundidad amaderada y toques especiados, ideal para quienes buscan un aroma distintivo y duradero.'
            ],
            [
                'name' => 'Ahly Vega Unisex',
                'main_attribute' => 'Floral Oriental',
                'details' => 'Dulce, Atalcado, Suntuoso',
                'image' => IMAGE_BASE_PATH . 'ahly_vega_unisex.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Vega se abre con una explosión floral seguida de un fondo oriental cálido, creando una experiencia olfativa rica y envolvente para cualquier ocasión.'
            ],
            [
                'name' => 'Badee Al Oud Honor Glory de Lattafa (Unisex)',
                'main_attribute' => 'Oud Especiado',
                'details' => 'Oud, Especias, Resinoso',
                'image' => IMAGE_BASE_PATH . 'badee-al-oud-honor-glory-de-lattafa-unisex-edp-flyer.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Honor & Glory es una fragancia opulenta con notas prominentes de oud, especias exóticas y resinas, perfecta para amantes de los aromas intensos y sofisticados.'
            ],
            [
                'name' => 'Lattafa Sublime Unisex',
                'main_attribute' => 'Ambar Frutal',
                'details' => 'Afrutado, Dulce, Cálido',
                'image' => IMAGE_BASE_PATH . 'lataffa_sublime_unisex.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Sublime de Lattafa es una mezcla armoniosa de frutas dulces y un fondo ambarino, creando una fragancia versátil y atractiva para cualquier género.'
            ],
            [
                'name' => 'Lattafa Khamrah',
                'main_attribute' => 'Amaderado Gourmand',
                'details' => 'Dátiles, Canela, Avainillado',
                'image' => IMAGE_BASE_PATH . 'lattafa_khamrah_perfumes_612.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Khamrah es una experiencia olfativa única, con notas de dátiles dulces y especias que evocan un postre árabe, perfecto para climas fríos.'
            ],
            [
                'name' => 'Starry Night Unisex',
                'main_attribute' => 'Amaderado Ahumado',
                'details' => 'Incienso, Resinas, Cuero',
                'image' => IMAGE_BASE_PATH . 'starry_night_unisex.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia misteriosa y profunda, que evoca una noche estrellada con sus notas ahumadas y amaderadas, ideal para ocasiones especiales.'
            ],
            [
                'name' => 'Lattafa Yara Tous (Unisex)', 
                'main_attribute' => 'Floral Frutal',
                'details' => 'Mango, Coco, Jazmín',
                'image' => IMAGE_BASE_PATH . 'lattafa_yara_tous.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Moschino Toy 2 Pearl (Unisex)', 
                'main_attribute' => 'Floral Frutal Almizclado',
                'details' => 'Limón, Jazmín, Almizcle',
                'image' => IMAGE_BASE_PATH . 'toy_2_pearl_unisex.jpg',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Louis Vuitton Ombre Nomade (Unisex)',
                'main_attribute' => 'Oriental Amaderado',
                'details' => 'Oud, Incienso, Frambuesa',
                'image' => IMAGE_BASE_PATH . 'louis-vuitton-ombre-nomade.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia de lujo con una rica mezcla de oud, incienso y un toque frutal, creando un aroma profundo y enigmático para cualquier ocasión.'
            ],
        ]
    ],
];
