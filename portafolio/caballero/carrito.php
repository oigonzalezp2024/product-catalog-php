<?php
// Incluir el archivo de configuración
// include '../../data.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_info['title']; ?></title>
    <meta name="description" content="<?php echo $page_info['description']; ?>">
    <meta name="keywords" content="<?php echo $page_info['keywords']; ?>">
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>

<body>

    <header class="banner">
        <img
            src="../../../<?php echo $page_info['banner']['src']; ?>"
            alt="<?php echo $page_info['banner']['alt']; ?>"
            width="<?php echo $page_info['banner']['width']; ?>"
            height="<?php echo $page_info['banner']['height']; ?>">
    </header>

    <main class="container">
        <section class="pedido-info">
            <h2 class="pedido-title">Tu Pedido: <span><?php echo $order_details['order_id']; ?></span></h2>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($order_details['items'] as $item): ?>
                            <tr>
                                <td><?php echo $item['product']; ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>$<?php echo number_format($item['price'], 0, ',', '.'); ?></td>
                                <td>$<?php echo number_format($item['quantity'] * $item['price'], 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="total-pago">
                <p>Total a pagar:</p>
                <form action="./" method="post">
                    <label for="total">Total</label>
                    <input type="text" id="total" value="$<?php echo number_format($order_details['total_amount'], 0, ',', '.'); ?>" readonly>
                </form>
            </div>

            <div class="servicio-cliente">
                <h3>Servicio al cliente</h3>
            </div>
        </section>

        <aside class="pagos-qr">
            <?php foreach ($order_details['payment_methods'] as $method): ?>
                <div class="metodo-pago">
                    <div class="pago-detalle">
                        <p class="entidad-pago"><?php echo $method['entity']; ?></p>
                        <p class="cuenta-numero"><?php echo $method['account_number']; ?></p>
                    </div>
                    <div class="qr-placeholder">
                        <img
                            src="../../../<?php echo $method['qr_image']['src']; ?>"
                            alt="../../../<?php echo $method['qr_image']['alt']; ?>"
                            width="<?php echo $method['qr_image']['width']; ?>"
                            height="<?php echo $method['qr_image']['height']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="metodo-pago" style="margin-top:40px;">
                <a href="./controller.php?orden=volverALPortafolio" style="
                    background-color: #ffffff;
                    color: #0064ff;
                    padding: 16px;
                    font-weight: bold;
                    border: 5px solid #5ac9ff;
                    border-radius: 16px;
                    ">Volver</a>
                <a href="./controller.php?orden=registroCliente" style="
                    background-color: #ffffff;
                    color: #00ff46;
                    padding: 16px;
                    font-weight: bold;
                    border: 5px solid #16ff00;
                    border-radius: 16px;
                    ">Siguiente</a>
            </div>
        </aside>
    </main>

    <script src="../../../assets/js/script.js"></script>
</body>

</html>