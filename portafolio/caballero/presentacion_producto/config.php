<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

// Carga las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../../');
$dotenv->load();

// config.php
// Este archivo centraliza la configuración y los datos del producto.

// Datos del sitio y del CEO
define('SITE_TITLE', 'Mi Tienda Online');
define('CEO_NAME', 'Oscar Gonzalez'); // ¡Referencia a tu nombre!
define('CEO_DESCRIPTION', 'CEO y fundador de Mi Tienda Online, con más de 10 años de experiencia en e-commerce y pasión por la innovación.');
define('FOOTER_TEXT', '&copy; ' . date('Y') . ' Mi Tienda Online. Todos los derechos reservados.');
define('MADE_WITH_LOVE_TEXT', 'Hecho con ❤️ en Cúcuta, Colombia'); // Recordando la ubicación y el creador.

// Define la ruta base donde se encuentran tus imágenes de productos y banners.
define('IMAGE_BASE_PATH', '../../images/'); 
define('BANNER_BASE_PATH', '../../images/banners/');

use App\Infrastructure\Repositories\ItemsRepository;

// Datos del Producto Principal
$itemsRepository = new ItemsRepository();
$imageId = $_GET['imageId'];
$product_data = $itemsRepository->getItemDetailById($imageId);

// Rutas de navegación del sitio
$nav_links = [
    ['text' => 'Inicio', 'href' => '../../../../'], // Cambia '#' por las rutas reales
    ['text' => 'Productos', 'href' => '../'],
    ['text' => 'Contacto', 'href' => 'https://api.whatsapp.com/send/?phone=%2B573203711137&text=Hola%20VEUD,%20acabo%20de%20visitar%20su%20perfil%20https://babull.com.co/veud/%20&type=phone_number&app_absent=0']
];

/**
 * Función para generar la URL de la API de QR.
 * Utiliza una API pública para generar el QR a partir de los datos proporcionados.
 * @param string $data Los datos (generalmente una URL) a codificar en el QR.
 * @param string $size El tamaño del QR en formato "WxH" (ej. "150x150").
 * @return string La URL completa para solicitar la imagen QR.
 */
function generateQrApiUrl($data, $size = '150x150') {
    return "https://api.qrserver.com/v1/create-qr-code/?size={$size}&data=" . urlencode($data);
}
