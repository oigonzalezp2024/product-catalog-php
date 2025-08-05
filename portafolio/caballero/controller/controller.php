<?php
$orden = $_GET['orden'];
if($orden == 'portafolio'){
    header('Location: ../index.php');
}else if($orden == 'detalle'){
    header('Location: ../presentacion_producto/index.php');
}else if($orden == 'agregarALCarrito'){
    header('Location: ../index.php');
}else if($orden == 'volverALPortafolio'){
    header('Location: ../index.php');
}else if($orden == 'visualizarPedido'){
    header('Location: ../carrito.php');
}else if($orden == 'generarPedido'){
    header('Location: ../../../generate_pdf.php');
}
