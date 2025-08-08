<?php
require_once './config.php'; // <--- Mueve esta línea al principio
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($business_info['catalog_title']); ?> - <?php echo htmlspecialchars($business_info['company_name']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($business_info['meta_description']); ?>">
    <link rel="stylesheet" href="../style.css">

    <?php
    // --- SCRIPT PHP PARA PRECARGAR ÚNICAMENTE LAS IMÁGENES DE ENCABEZADOS ---

    // 1. Precargar el banner principal del header (LCP más probable)
    echo '<link rel="preload" href="' . htmlspecialchars($business_info['main_header_banner_image']) . '" as="image">';

    // 2. Precargar el banner de la primera categoría (si existe y es relevante para la carga inicial)
    $first_category_key = array_key_first($products_data);
    if ($first_category_key !== null && isset($products_data[$first_category_key]['banner_image'])) {
        echo '<link rel="preload" href="' . htmlspecialchars($products_data[$first_category_key]['banner_image']) . '" as="image">';
    }
    ?>
</head>
<body>
    <header>
        <div class="main-banner-container">
            <img src="<?php echo htmlspecialchars($business_info['main_header_banner_image']); ?>" 
                 alt="<?php echo htmlspecialchars($business_info['main_header_banner_alt']); ?>" 
                 class="main-header-banner"
                 width="<?php echo htmlspecialchars($business_info['main_header_banner_width']); ?>" 
                 height="<?php echo htmlspecialchars($business_info['main_header_banner_height']); ?>">
        </div>
    </header>

    <main>
        <div class="container">
            <?php foreach ($products_data as $category_name => $category_data): ?>
                <section class="product-category">
                    <h2><?php echo htmlspecialchars($category_name); ?></h2>
                    <?php
                    $banner_width = '';
                    $banner_height = '';
                    if (isset($category_data['banner_image']) && isset($category_data['banner_description'])) {
                        preg_match('/Dimensiones:\s*(\d+)x(\d+)px/', $category_data['banner_description'], $matches_banner);
                        if (isset($matches_banner[1]) && isset($matches_banner[2])) {
                            $banner_width = $matches_banner[1];
                            $banner_height = $matches_banner[2];
                        }
                    }
                    ?>
                    <?php if (isset($category_data['banner_image'])): ?>
                        <div class="banner-image-container">
                            <img src="<?php echo htmlspecialchars($category_data['banner_image']); ?>"
                                    alt="Banner de la categoría <?php echo htmlspecialchars($category_name); ?>"
                                    class="category-banner-image"
                                    <?php if (!empty($banner_width) && !empty($banner_height)): ?>
                                        width="<?php echo $banner_width; ?>"
                                        height="<?php echo $banner_height; ?>"
                                    <?php endif; ?>
                                >
                        </div>
                    <?php endif; ?>
                    <div class="product-grid">
                        <?php foreach ($category_data['items'] as $item): ?>
                            <article class="product-item">
                                <figure>
                                    <?php
                                    $item_width = '';
                                    $item_height = '';
                                    if (isset($item['description'])) {
                                        preg_match('/Dimensiones:\s*(\d+)x(\d+)px/', $item['description'], $matches_item);
                                        if (isset($matches_item[1]) && isset($matches_item[2])) {
                                            $item_width = $matches_item[1];
                                            $item_height = $matches_item[2];
                                        }
                                    }
                                    ?>
                                    <a href="./controller/controller.php?orden=detalle">
                                    <img src="<?php echo htmlspecialchars($item['image']); ?>"
                                         alt="Imagen de <?php echo htmlspecialchars($item['name']); ?> - <?php echo htmlspecialchars($category_name); ?>"
                                         <?php if (!empty($item_width) && !empty($item_height)): ?>
                                             width="<?php echo $item_width; ?>"
                                             height="<?php echo $item_height; ?>"
                                         <?php endif; ?>
                                    >
                                    </a>
                                    <figcaption><h3><?php echo htmlspecialchars($item['name']); ?></h3></figcaption>
                                </figure>
                                <p class="main-attribute"><?php echo htmlspecialchars($item['main_attribute']); ?></p>
                                <p><?php echo htmlspecialchars($item['details']); ?></p>
                                <?php if (isset($item['full_description'])): ?>
                                    <p class="item-full-description"><?php echo htmlspecialchars($item['full_description']); ?></p>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p><a style="color: #ffffff; text-decoration: none; font-weight: bold;" href="https://babull.com.co"><?php echo htmlspecialchars($business_info['footer_text']); ?></a></p>
    </footer>
<a href="./controller/controller.php?orden=visualizarPedido"
    id="carrito"
    style="
    min-width: 50px;
    min-height: 50px;
    max-width: 50px;
    background-color: red;
    position: fixed; /* <-- Cambia de 'absolute' a 'fixed' */
    right: 5px;
    top: 5px;
"></a>
</body>
</html>
