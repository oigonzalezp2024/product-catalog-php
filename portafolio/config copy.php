<?php

// config.php

// Define la ruta base donde se encuentran tus imágenes de productos y banners.
define('IMAGE_BASE_PATH', 'images/'); // Ajusta esta ruta según la ubicación real de tus imágenes de ítems
define('BANNER_BASE_PATH', 'images/banners/'); // Ruta para banners o imágenes de categoría, ajústala si es necesario

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
    // Nueva meta descripción para SEO
    'meta_description' => 'Descubre nuestra exclusiva colección de perfumes de lujo y fragancias para hombre y mujer. Explora las últimas novedades de Carolina Herrera, Chanel, Paco Rabanne y más. ¡Encuentra tu aroma ideal!',
];

// Array con todos los datos de los productos/categorías
// Las claves de alto nivel (ej. 'Carolina Herrera') actúan como nombres de categoría.
$products_data = [
    'Carolina Herrera' => [
        'banner_image' => BANNER_BASE_PATH . 'carolina_herrera_banner.jpg', // Banner de la categoría
        'banner_description' => 'Dimensiones: 1200x300px', // Especificación de dimensiones del banner
        'items' => [ // Aquí están los ÍTEMS de esta categoría (perfumes en este caso)
            [
                'name' => '212 SEXY',
                'main_attribute' => 'Ambar floral', // Antes 'scent_profile'
                'details' => 'Dulce, Atalcado, Almizclado', // Antes 'notes'
                'image' => IMAGE_BASE_PATH . '212sexy.jpg',
                'description' => 'Dimensiones: 300x300px',
                'full_description' => '212 Sexy es una fragancia oriental floral para la mujer moderna, seductora y enigmática. Perfecta para la noche, sus notas de bergamota, pimienta rosa y vainilla te envuelven en un aura irresistible.'
            ],
            [
                'name' => '212 VIP RED',
                'main_attribute' => 'Floral frutal',
                'details' => 'Dulce, Alcohol, Verde',
                'image' => IMAGE_BASE_PATH . '212vipred.jpg',
                'description' => 'Dimensiones: 300x300px',
                'full_description' => 'Una fragancia vibrante y enérgica, ideal para la vida nocturna. Destaca por sus notas únicas de ron y fruta de la pasión, creando un aroma distintivo y adictivo.'
            ],
            [
                'name' => '212 VIP ROSÉ',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Champaña, Floral',
                'image' => IMAGE_BASE_PATH . '212viprose.jpg',
                'description' => 'Dimensiones: 300x300px',
                'full_description' => 'Un perfume glamuroso y festivo, inspirado en las fiestas exclusivas de Nueva York. Con notas de champaña rosada y flor de durazno, evoca elegancia y alegría.'
            ],
            [
                'name' => '212 VIP',
                'main_attribute' => 'Ambar vainilla',
                'details' => 'Avanillado, Ron, Dulce',
                'image' => IMAGE_BASE_PATH . '212vip.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => '212 CLASSIC',
                'main_attribute' => 'Floral amaderado',
                'details' => 'Floral blanco, Florales, Cítrico',
                'image' => IMAGE_BASE_PATH . '212classic.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => '212 HEROES FOREVER',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Dulce, Floral blanco',
                'image' => IMAGE_BASE_PATH . '212heroesforever.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'GOOD GIRL',
                'main_attribute' => 'Ambar floral',
                'details' => 'Cálido especiado, Dulce, Floral blanco',
                'image' => IMAGE_BASE_PATH . 'goodgirl.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'GOOD GIRL GOLD',
                'main_attribute' => 'Ambar floral',
                'details' => 'Avainillado, Dulce, Floral blanco',
                'image' => IMAGE_BASE_PATH . 'goodgirlgold.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'CH SUBLIME',
                'main_attribute' => 'Chicle floral',
                'details' => 'Pachuli, Floral, Dulce',
                'image' => IMAGE_BASE_PATH . 'chsublime.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'CH DAMA',
                'main_attribute' => 'Ambar floral',
                'details' => 'Amaderado, Cítrico, Dulce',
                'image' => IMAGE_BASE_PATH . 'chdama.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'CAROLINA HERRERA',
                'main_attribute' => 'Floral',
                'details' => 'Nardos, Floral blanco, Verde',
                'image' => IMAGE_BASE_PATH . 'carolinaherrera.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Chanel' => [
        'banner_image' => BANNER_BASE_PATH . 'chanel_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'COCO MADEMOISELLE',
                'main_attribute' => 'Ambar floral',
                'details' => 'Cítrico, Amaderado, Pachuli',
                'image' => IMAGE_BASE_PATH . 'cocomademoiselle.jpg',
                'description' => 'Dimensiones: 300x300px',
                'full_description' => 'Una fragancia elegante y sofisticada, con un carácter fuerte y sorprendente. Ideal para la mujer independiente que busca un aroma moderno y atemporal.'
            ],
            [
                'name' => 'CHANEL N°5',
                'main_attribute' => 'Ambar floral',
                'details' => 'Amaderado, Aldehídico, Fresco',
                'image' => IMAGE_BASE_PATH . 'chaneln5.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'CHANCE CHANEL',
                'main_attribute' => 'Almizcle Floral',
                'details' => 'Cítrico, Amaderado, Fresco especiado',
                'image' => IMAGE_BASE_PATH . 'chancechanel.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Escada' => [
        'banner_image' => BANNER_BASE_PATH . 'escada_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'MOON SPARKLE',
                'main_attribute' => 'Floral frutal',
                'details' => 'Dulce, Afrutado, Floral',
                'image' => IMAGE_BASE_PATH . 'moonsparkle.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'TAJ SUNSET',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Dulce, Tropical',
                'image' => IMAGE_BASE_PATH . 'tajsunset.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Lacoste' => [
        'banner_image' => BANNER_BASE_PATH . 'lacoste_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'LACOSTE SPARKLING',
                'main_attribute' => 'Floral frutal',
                'details' => 'Dulce, Caramelo',
                'image' => IMAGE_BASE_PATH . 'lacostesparkling.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Touch of Pink' => [
        'banner_image' => BANNER_BASE_PATH . 'touch_of_pink_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'TOUCH OF PINK',
                'main_attribute' => 'Floral frutal',
                'details' => 'Cítrico, Dulce, Atalcado',
                'image' => IMAGE_BASE_PATH . 'touchofpink.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Paris Hilton' => [
        'banner_image' => BANNER_BASE_PATH . 'paris_hilton_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'MEOW!',
                'main_attribute' => 'Floral frutal',
                'details' => 'Avainillado, Floral blanca, Dulce',
                'image' => IMAGE_BASE_PATH . 'meow.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'PARIS HILTON CLASICA',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Floral blanco, Fresco',
                'image' => IMAGE_BASE_PATH . 'parishiltonclasica.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'CAN CAN',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Ambar, Dulce',
                'image' => IMAGE_BASE_PATH . 'cancan.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'HEIRESS',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutados, Dulce, Champán',
                'image' => IMAGE_BASE_PATH . 'heiress.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Lancôme' => [
        'banner_image' => BANNER_BASE_PATH . 'lancome_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'LA VIDA ES BELLA',
                'main_attribute' => 'Floral frutal',
                'details' => 'Avanillada, Dulce, Afrutado',
                'image' => IMAGE_BASE_PATH . 'lavidaesbella.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Dazzle' => [
        'banner_image' => BANNER_BASE_PATH . 'dazzle_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'DAZZLE',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Dulce, Acerezado',
                'image' => IMAGE_BASE_PATH . 'dazzle.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Paco Rabanne' => [
        'banner_image' => BANNER_BASE_PATH . 'paco_rabanne_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'OLYMPEA',
                'main_attribute' => 'Ambar floral',
                'details' => 'Avainillado, Floral blanca, Salado',
                'image' => IMAGE_BASE_PATH . 'olympea.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'LADY MILLION',
                'main_attribute' => 'Floral frutal',
                'details' => 'Amielado, Dulce, Floral blanco',
                'image' => IMAGE_BASE_PATH . 'ladymillion.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'LADY MILLION LUCKY',
                'main_attribute' => 'Floral frutal',
                'details' => 'Amaderado, Afrutado, Dulce',
                'image' => IMAGE_BASE_PATH . 'ladymillionlucky.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'FAME',
                'main_attribute' => 'Amizcle floral',
                'details' => 'Tropical, Avainillado, Afrutados',
                'image' => IMAGE_BASE_PATH . 'fame.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Yanbal' => [
        'banner_image' => BANNER_BASE_PATH . 'yanbal_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'YANBAL CCORI',
                'main_attribute' => 'Ambar floral',
                'details' => 'Avanillado, Rosas, Chocolate',
                'image' => IMAGE_BASE_PATH . 'yanbalccori.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'YANBAL TEMTATION',
                'main_attribute' => 'Floral',
                'details' => 'Cálido especiado, Floral blanco, Rosas',
                'image' => IMAGE_BASE_PATH . 'yanbaltemptation.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'YANBAL GAIA',
                'main_attribute' => 'Floral',
                'details' => 'Aromático, Afrutados, Floral',
                'image' => IMAGE_BASE_PATH . 'yanbalgaia.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'YANBAL CIELO',
                'main_attribute' => 'Floral frutal',
                'details' => 'Amaderado, Floral blanco, Verde',
                'image' => IMAGE_BASE_PATH . 'yanbalcielo.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Victoria\'s Secret' => [
        'banner_image' => BANNER_BASE_PATH . 'victorias_secret_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'MANGO TEMPTATION',
                'main_attribute' => 'Floral frutal',
                'details' => 'Tropical, Afrutado, Dulce',
                'image' => IMAGE_BASE_PATH . 'mangotemptation.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'PURE SEDUCTION',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Dulce, Floral blanco',
                'image' => IMAGE_BASE_PATH . 'pureseduction.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'AQUA KISS',
                'main_attribute' => 'Floral',
                'details' => 'Aromático, Marino, Florales',
                'image' => IMAGE_BASE_PATH . 'aquakiss.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'NIGHT',
                'main_attribute' => 'Ambar floral',
                'details' => 'Afrutado, Dulce, Amaderado',
                'image' => IMAGE_BASE_PATH . 'night.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'BOMSHELL',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Fresco, Dulce',
                'image' => IMAGE_BASE_PATH . 'bombshell.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'MELON KIDS',
                'main_attribute' => 'Floral frutal',
                'details' => 'Ozónico, Acuático, Verde',
                'image' => IMAGE_BASE_PATH . 'melonkids.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'GIVE ME LOVE',
                'main_attribute' => 'Ambar vanilla',
                'details' => 'Afrutado, Atalcado',
                'image' => IMAGE_BASE_PATH . 'givemelove.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'SCANDALOUS',
                'main_attribute' => 'Flora frutal',
                'details' => 'Afrutado, Floral, Dulce',
                'image' => IMAGE_BASE_PATH . 'scandalous.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
    'Other Brands' => [
        'banner_image' => BANNER_BASE_PATH . 'other_brands_banner.jpg',
        'banner_description' => 'Dimensiones: 1200x300px',
        'items' => [
            [
                'name' => 'ROYALTY BY MALUMA JADE',
                'main_attribute' => 'Chipre floral',
                'details' => 'Floral blanco, Florales, Amaderado',
                'image' => IMAGE_BASE_PATH . 'malumajade.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'BURBERRY HER',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Amaderado, Dulce',
                'image' => IMAGE_BASE_PATH . 'burberryher.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'VERSACE BRIGHT CRYSTAL',
                'main_attribute' => 'Floral frutal',
                'details' => 'Florales, Fresco, Cítrico',
                'image' => IMAGE_BASE_PATH . 'versacebrightcrystal.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'GUESS',
                'main_attribute' => 'Floral frutal',
                'details' => 'Florales, Afrutados, Fresco',
                'image' => IMAGE_BASE_PATH . 'guess.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'VERSACE YELLOW DIAMOND',
                'main_attribute' => 'Floral',
                'details' => 'Cítrico, Floral amarillo, Florales',
                'image' => IMAGE_BASE_PATH . 'versaceyellowdiamond.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'GUESS GOLD',
                'main_attribute' => 'Floral frutal',
                'details' => 'Amaderado, Afrutado, Ambar',
                'image' => IMAGE_BASE_PATH . 'guessgold.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'LIGHT BLUE',
                'main_attribute' => 'Floral frutal',
                'details' => 'Cítrico, Amaderado, Fresco',
                'image' => IMAGE_BASE_PATH . 'lightblue.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'THE ONE DOLCE & GABBANA',
                'main_attribute' => 'Ámbar floral',
                'details' => 'Afrutados, Floral blanco, Avainillado',
                'image' => IMAGE_BASE_PATH . 'theonedolcegabbana.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'SCANDAL',
                'main_attribute' => 'Ambar vanilla',
                'details' => 'Afrutado, Atalcado',
                'image' => IMAGE_BASE_PATH . 'scandal.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'MOSCHINO TOY 2',
                'main_attribute' => 'Floral amaderado',
                'details' => 'Afrutado, Floral, Fresco',
                'image' => IMAGE_BASE_PATH . 'moschinotoy2.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'OUR MOMENT',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Amaderado, Floral',
                'image' => IMAGE_BASE_PATH . 'ourmoment.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'CALVIN KLEIN ESCAPE',
                'main_attribute' => 'Floral acuático',
                'details' => 'Aromático, Afrutados, Florales',
                'image' => IMAGE_BASE_PATH . 'calvinkleinescape.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'MOSCHINO FUNNY',
                'main_attribute' => 'Floral frutal',
                'details' => 'Verde, Fresco, Cítrico',
                'image' => IMAGE_BASE_PATH . 'moschinofunny.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'MOSCHINO BUBBLE GUM',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Dulce, Rosas',
                'image' => IMAGE_BASE_PATH . 'moschinobubblegum.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'J\'ADORE',
                'main_attribute' => 'Floral frutal',
                'details' => 'Floral blanco, Afrutado, Floral',
                'image' => IMAGE_BASE_PATH . 'jadore.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'ISSEY MIYAKE',
                'main_attribute' => 'Floral acuático',
                'details' => 'Fresco, Ozónico, Floral',
                'image' => IMAGE_BASE_PATH . 'isseymiyake.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'BFF',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutado, Atalcado, Dulce',
                'image' => IMAGE_BASE_PATH . 'bff.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'SHAKIRA',
                'main_attribute' => 'Ambar floral',
                'details' => 'Avainillado, Ambar, Atalcado',
                'image' => IMAGE_BASE_PATH . 'shakira.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'TOMMY GIRL',
                'main_attribute' => 'Floral frutal',
                'details' => 'Cítrico, Florales, Floral blanco',
                'image' => IMAGE_BASE_PATH . 'tommygirl.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'SWISS ARMY WOMAN',
                'main_attribute' => 'Floral',
                'details' => 'Fresco, Floral blanco, Florales',
                'image' => IMAGE_BASE_PATH . 'swissarmywoman.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'DIAMANTE BLANCO',
                'main_attribute' => 'Amaderado',
                'details' => 'Azucena, Naranja, Neroli',
                'image' => IMAGE_BASE_PATH . 'diamanteblanco.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => '360° WOMAN',
                'main_attribute' => 'Floral',
                'details' => 'Floral blanco, Florales, Fresco',
                'image' => IMAGE_BASE_PATH . '360woman.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'RALPH',
                'main_attribute' => 'Floral frutal',
                'details' => 'Floral, Afrutado, Cítrico',
                'image' => IMAGE_BASE_PATH . 'ralph.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'ARIANA GRANDE CLOUD',
                'main_attribute' => 'Floral frutal',
                'details' => 'Lactónico, Avainillado, Dulce',
                'image' => IMAGE_BASE_PATH . 'arianagrandecloud.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'AMOR AMOR CACHAREL',
                'main_attribute' => 'Floral frutal',
                'details' => 'Cítrico, Afrutados, Avainillado',
                'image' => IMAGE_BASE_PATH . 'amoramorcacharel.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'SELENA',
                'main_attribute' => 'Floral frutal',
                'details' => 'Afrutados, Dulce, Tropical',
                'image' => IMAGE_BASE_PATH . 'selena.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
            [
                'name' => 'THANK U NEXT',
                'main_attribute' => 'Floral frutal',
                'details' => 'Dulce, Coco, Afrutados',
                'image' => IMAGE_BASE_PATH . 'thankunext.jpg',
                'description' => 'Dimensiones: 300x300px'
            ],
        ]
    ],
];
