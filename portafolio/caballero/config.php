<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Infrastructure\Repositories\ItemsRepository;

// Carga las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->load();

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

$itemsRepository = new ItemsRepository('../images/');

// Array con todos los datos de los productos/categorías
// Las claves de alto nivel (ej. 'Perfumes para Hombre') actúan como nombres de categoría.
$products_data = $itemsRepository->itemDetailOfCategory();
