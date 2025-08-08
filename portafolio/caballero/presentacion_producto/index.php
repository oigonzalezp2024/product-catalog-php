<?php
// index.php
// Archivo principal que renderiza la página del producto usando datos de config.php.
require_once 'config.php'; // Incluye tu archivo de configuración
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?> - <?php echo $product_data['title']; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1 class="site-title"><?php echo SITE_TITLE; ?></h1>
            <nav class="main-nav">
                <button class="menu-toggle material-icons" aria-label="Abrir menú">menu</button>
                <ul class="nav-list">
                    <?php foreach ($nav_links as $link): // Recorre los enlaces de navegación desde config.php ?>
                        <li><a href="<?php echo $link['href']; ?>"><?php echo $link['text']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main class="product-page-content">
        <div class="container product-layout">
            <div class="product-image-wrapper">
                <img
                    src="<?php echo $product_data['main_image']['path']; ?>"
                    alt="<?php echo $product_data['main_image']['alt']; ?>"
                    width="<?php echo $product_data['main_image']['width']; ?>"
                    height="<?php echo $product_data['main_image']['height']; ?>"
                    class="product-main-image"
                >
                <?php if (!empty($product_data['gallery_images'])): // Solo muestra la galería si hay imágenes configuradas ?>
                    <div class="product-thumbnail-gallery">
                        <?php foreach ($product_data['gallery_images'] as $index => $gallery_img): // Recorre las imágenes de la galería ?>
                            <img
                                src="<?php echo $gallery_img['path']; ?>"
                                alt="<?php echo $gallery_img['alt']; ?>"
                                data-full-image="<?php echo $gallery_img['path']; ?>"
                                class="thumbnail-item <?php echo ($index === 0) ? 'active' : ''; ?>"
                            >
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="product-details-wrapper">
                <h2 class="product-title"><?php echo $product_data['title']; ?></h2>
                <p class="product-description">
                    <?php echo $product_data['description']; // La descripción puede contener etiquetas HTML como <br> ?>
                </p>
                <div class="product-actions">
                    <span class="product-price">$<?php echo number_format($product_data['price'], 2, '.', ','); ?></span>
                    <a class="add-to-cart-btn" href="../controller/controller.php?orden=agregarALCarrito&itemid=2">Añadir al Carrito</a>
                </div>

                <div class="qr-code-section">
                    <h3>Más detalles y compra:</h3>
                    <img
                        src="<?php echo generateQrApiUrl($product_data['qr_code']['data_url'], $product_data['qr_code']['size']); ?>"
                        alt="<?php echo $product_data['qr_code']['alt']; ?>"
                        class="product-qr-code"
                    >
                    <p class="qr-text">Escanea para ir a la página oficial del producto.</p>
                </div>

                <div class="product-actions">    
                    <a class="add-to-cart-btn" href="../controller/controller.php?orden=volverALPortafolio" style="
                    width: 100%;
                    text-align: center;
                    max-width: 300px;
                    ">Volver</a>
                </div>

            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p><?php echo FOOTER_TEXT; ?></p>
            <p><?php echo MADE_WITH_LOVE_TEXT; ?></p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
