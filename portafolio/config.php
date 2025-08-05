<?php

// config.php

// Define la ruta base donde se encuentran tus imágenes de productos y banners.
define('IMAGE_BASE_PATH', 'images/'); 
define('BANNER_BASE_PATH', 'images/banners/'); 

// Información global del negocio
$business_info = [
    'company_name' => 'Tu Negocio de Perfumería', // Nombre de tu negocio
    'catalog_title' => 'CATÁLOGO GENERAL DE PRODUCTOS',
    'catalog_slogan' => 'Descubre la esencia que te define.', // Eslogan o mensaje principal
    'social_media_handle' => '@tu_perfumeria_online', // Tu handle de redes sociales
    'footer_text' => '&copy; 2025 Tu Negocio de Perfumería. Todos los derechos reservados.', // Texto del pie de página
    'main_header_banner_image' => BANNER_BASE_PATH . 'main_header_banner.jpg', // Ruta del banner principal del header
    'main_header_banner_alt' => 'Explora nuestra colección de perfumes y ofertas especiales', // Texto alternativo del banner principal
    'main_header_banner_width' => 1920, // Ancho ideal para el banner principal
    'main_header_banner_height' => 400, // Alto ideal para el banner principal
    'meta_description' => 'Descubre nuestra exclusiva colección de perfumes de lujo y fragancias para hombre y mujer. ¡Explora los aromas más exclusivos y encuentra tu esencia ideal!', // Nueva meta descripción para SEO
];

// Array con todos los datos de los productos/categorías
// Las claves de alto nivel (ej. 'Perfumes para Hombre') actúan como nombres de categoría.
$products_data = [
    'Perfumes Unisex' => [
        'banner_image' => BANNER_BASE_PATH . 'unisex_perfumes_banner.jpg', // ¡Asegúrate de crear este banner!
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
    'Perfumes para Hombre' => [
        'banner_image' => BANNER_BASE_PATH . 'men_perfumes_banner.jpg', // ¡Asegúrate de crear este banner!
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
        ]
    ],
    'Perfumes para Dama' => [
        'banner_image' => BANNER_BASE_PATH . 'women_perfumes_banner.jpg', // ¡Asegúrate de crear este banner!
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
        ]
    ],
];
