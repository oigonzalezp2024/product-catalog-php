<?php
// config.php
// Este archivo centraliza la configuración y los datos del producto.

// Datos del sitio y del CEO
define('SITE_TITLE', 'Mi Tienda Online');
define('CEO_NAME', 'Oscar Gonzalez'); // ¡Referencia a tu nombre!
define('CEO_DESCRIPTION', 'CEO y fundador de Mi Tienda Online, con más de 10 años de experiencia en e-commerce y pasión por la innovación.');
define('FOOTER_TEXT', '&copy; ' . date('Y') . ' Mi Tienda Online. Todos los derechos reservados.');
define('MADE_WITH_LOVE_TEXT', 'Hecho con ❤️ en Cúcuta, Colombia'); // Recordando la ubicación y el creador.

// Datos del Producto Principal
$product_data = [
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
];

// Rutas de navegación del sitio
$nav_links = [
    ['text' => 'Inicio', 'href' => '#'], // Cambia '#' por las rutas reales
    ['text' => 'Productos', 'href' => '#'],
    ['text' => 'Contacto', 'href' => '#']
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
