<?php

// config.php

// Define la ruta base donde se encuentran tus imágenes de productos y banners.
define('IMAGE_BASE_PATH', '../images/'); 
define('BANNER_BASE_PATH', '../images/banners/'); 

// Información global del negocio
$business_info = [
    'company_name' => 'VEUD | PERFUMERIA', // Nombre de tu negocio
    'catalog_title' => 'CATÁLOGO DE GENERAL DE PERFUMERIA PARA DAMA Y UNISEX',
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
    'Perfumes para Dama' => [
        'banner_image' => BANNER_BASE_PATH . 'women_perfumes_banner.svg', // ¡Asegúrate de crear este banner!
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'Ari de Ariana Grande (Dama)',
                'main_attribute' => 'Floral Frutal Gourmand',
                'details' => 'Malvavisco, Pera, Orquídea',
                'image' => IMAGE_BASE_PATH . 'ari_de_ariana_grande_dama.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia dulce y coqueta con toques de malvavisco y frutas, encapsulando la personalidad vibrante de Ariana Grande.'
            ],
            [
                'name' => 'Cloud Pink de Ariana Grande (Dama)',
                'main_attribute' => 'Floral Frutal Gourmand',
                'details' => 'Piña, Coco, Musgo',
                'image' => IMAGE_BASE_PATH . 'cloud_pink_ariana_grande.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Cloud Pink es una versión más fresca y luminosa de la icónica Cloud, con notas tropicales y un fondo cremoso que la hacen adictiva y soñadora.'
            ],
            [
                'name' => 'Sweet Candy de Ariana Grande (Dama)', 
                'main_attribute' => 'Gourmand Frutal',
                'details' => 'Mora, Malvavisco, Vainilla',
                'image' => IMAGE_BASE_PATH . 'sweet_candy_de_ariana_grande_dama.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia irresistiblemente dulce y juguetona, con una explosión de frutas y un corazón de dulces golosinas que te harán sentir alegre.'
            ],
            [
                'name' => 'Ccori Yanbal Morada (Dama)', 
                'main_attribute' => 'Floral Oriental',
                'details' => 'Vainilla, Orquídea, Atalcado',
                'image' => IMAGE_BASE_PATH . 'ccori_yanbal_morada_dama.avif',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una variante más intensa de Ccori, con notas orientales que evocan elegancia y misterio.'
            ],
            [
                'name' => 'Fame de Paco Rabanne (Dama)', 
                'main_attribute' => 'Chipre Floral Frutal',
                'details' => 'Mango, Incienso, Sándalo',
                'image' => IMAGE_BASE_PATH . 'Fame_paco_rabanne_dama.jpg',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Fame es una fragancia moderna y audaz, con una combinación exótica de mango, incienso y jazmín para la mujer que se atreve a ser diferente.'
            ],
            [
                'name' => 'Halloween (Dama)',
                'main_attribute' => 'Floral Atalcado',
                'details' => 'Violeta, Iris, Vainilla',
                'image' => IMAGE_BASE_PATH . 'halloween_dama.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Una fragancia mágica y enigmática, con notas atalcadas de violeta y un fondo dulce, perfecta para un aura de misterio.'
            ],
            [
                'name' => 'Lattafa Haya (Dama)',
                'main_attribute' => 'Floral Frutal',
                'details' => 'Flores Blancas, Frutas, Vainilla',
                'image' => IMAGE_BASE_PATH . 'lataffa_haya_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Mayar Cherry (Dama)',
                'main_attribute' => 'Floral Frutal Gourmand',
                'details' => 'Cereza, Grosella Negra, Almizcle',
                'image' => IMAGE_BASE_PATH . 'lataffa_mayar_cherry_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Mayar (Dama)',
                'main_attribute' => 'Floral Frutal',
                'details' => 'Frambuesa, Flor de Naranjo, Sándalo',
                'image' => IMAGE_BASE_PATH . 'lataffa_mayar_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Noble Blush (Dama)',
                'main_attribute' => 'Floral Rosa',
                'details' => 'Rosa, Peonía, Almizcle',
                'image' => IMAGE_BASE_PATH . 'lataffa_noble_blush_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Yara Candy (Dama)',
                'main_attribute' => 'Gourmand Dulce',
                'details' => 'Malvavisco, Coco, Vainilla',
                'image' => IMAGE_BASE_PATH . 'lataffa_yara_candy_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Yara (Dama)',
                'main_attribute' => 'Floral Frutal',
                'details' => 'Fresa, Heliotropo, Vainilla',
                'image' => IMAGE_BASE_PATH . 'lataffa_yara_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Yara Moi (Dama)',
                'main_attribute' => 'Almizcle Floral',
                'details' => 'Jazmín, Sándalo, Vainilla',
                'image' => IMAGE_BASE_PATH . 'lataffa_yara_moi_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Lattafa Yumyum Morada (Dama)',
                'main_attribute' => 'Floral Frutal',
                'details' => 'Frutas Exóticas, Flores Tropicales, Almizcle',
                'image' => IMAGE_BASE_PATH . 'lataffa_yumyum_morada_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'My Way (Dama)',
                'main_attribute' => 'Floral Blanco',
                'details' => 'Flor de Naranjo, Nardos, Vainilla',
                'image' => IMAGE_BASE_PATH . 'my_way_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Selena Gomez (Dama)',
                'main_attribute' => 'Floral Frutal Gourmand',
                'details' => 'Frambuesa, Fresia, Vainilla',
                'image' => IMAGE_BASE_PATH . 'selena_gomez_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Sorbetto Rosso Escada (Dama)',
                'main_attribute' => 'Floral Frutal',
                'details' => 'Sandía, Notas Marinas, Mandarina',
                'image' => IMAGE_BASE_PATH . 'sorbetto_rosso_escada.jpg',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Temptation de Victoria\'s Secret (Dama)',
                'main_attribute' => 'Floral Frutal',
                'details' => 'Manzana, Sábila, Notas Florales',
                'image' => IMAGE_BASE_PATH . 'temptation_de_victoria_secret_dama.webp',
                'description' => 'Dimensiones: 300x300px' // ¡Verifica y actualiza!
            ],
            [
                'name' => 'Valentino Born in Roma (Dama)',
                'main_attribute' => 'Floral Amaderado',
                'details' => 'Jazmín, Grosella Negra, Vainilla',
                'image' => IMAGE_BASE_PATH . 'valentino_born_in_roma_dama.webp',
                'description' => 'Dimensiones: 300x300px', // ¡Verifica y actualiza!
                'full_description' => 'Born in Roma Donna es una fragancia floral amaderada que combina la elegancia de la alta costura con un toque de rebeldía, ideal para la mujer contemporánea.'
            ],
        ],
    ],
];
