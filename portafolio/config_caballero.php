<?php

// config.php

// Define la ruta base donde se encuentran tus imágenes de productos y banners.
define('IMAGE_BASE_PATH', '../images/'); 
define('BANNER_BASE_PATH', '../images/banners/'); 

// Información global del negocio
$business_info = [
    'company_name' => 'VEUD | PERFUMERIA', // Nombre de tu negocio
    'catalog_title' => 'CATÁLOGO DE GENERAL DE PERFUMERIA PARA CABALLERO Y UNISEX',
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
    'Perfumes para Hombre' => [
        'banner_image' => BANNER_BASE_PATH . 'men_perfumes_banner.svg', // ¡Asegúrate de crear este banner!
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'Acqua di Giò Profumo (Hombre)',
                'main_attribute' => 'Aromático Acuático',
                'details' => 'Incienso, Notas Marinas, Pachulí',
                'image' => IMAGE_BASE_PATH . 'aqua_de_guio_profumo_hombre.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Profumo es una reinterpretación profunda y sofisticada de Acqua di Giò, con notas minerales y un corazón de incienso que evoca la fuerza del mar.'
            ],
            [
                'name' => 'Jean Paul Gaultier Le Male Ultra (Hombre)',
                'main_attribute' => 'Oriental Fougère',
                'details' => 'Vainilla, Pera, Canela',
                'image' => IMAGE_BASE_PATH . 'Jean Paul lemale ultra hombre.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una versión intensa y audaz de Le Male, con una mezcla de menta, lavanda y vainilla que proyecta sensualidad y misterio.'
            ],
            [
                'name' => 'Jean Paul Gaultier Le Male Elixir (Hombre)',
                'main_attribute' => 'Amaderado Ambarino',
                'details' => 'Lavanda, Vainilla, Haba Tonka',
                'image' => IMAGE_BASE_PATH . 'jean_paul_lemale_elixir_hombre.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Le Male Elixir es la interpretación más rica y opulenta, con notas de miel y tabaco que lo hacen irresistible y perfecto para la noche.'
            ],
            [
                'name' => 'Orientica Oud Saffron (Hombre)',
                'main_attribute' => 'Oriental Amaderado',
                'details' => 'Azafrán, Oud, Cuero',
                'image' => IMAGE_BASE_PATH . 'orientica_oud_safron_hombre.jpg',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia de lujo con azafrán, oud y cuero, ideal para hombres que aprecian los aromas profundos y exóticos.'
            ],
            [
                'name' => '9 PM Negra (Hombre)',
                'main_attribute' => 'Oriental Especiado',
                'details' => 'Ambar, Vainilla, Manzana',
                'image' => IMAGE_BASE_PATH . 'p_9_pm_negra_hombre.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia nocturna e intensa con notas cálidas y especiadas, ideal para eventos especiales y para dejar una impresión duradera.'
            ],
            [
                'name' => 'Perfume Dolce & Gabbana Pour Homme',
                'main_attribute' => 'Aromático Fougère',
                'details' => 'Cítricos, Lavanda, Tabaco',
                'image' => IMAGE_BASE_PATH . 'perfume_dolce_gabbana_pour_homme.jpg',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Un clásico atemporal para hombres, con una mezcla de cítricos frescos, lavanda aromática y un toque de tabaco que lo hace elegante y masculino.'
            ],
            [
                'name' => 'Valentino Born in Roma (Hombre)',
                'main_attribute' => 'Amaderado Aromático',
                'details' => 'Vetiver, Jengibre, Salvia',
                'image' => IMAGE_BASE_PATH . 'valentino_born_in_roma_hombre.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Born in Roma Uomo es una fragancia moderna y fresca, con un corazón amaderado que celebra la herencia romana y la modernidad urbana.'
            ],
        ],
    ],
];
