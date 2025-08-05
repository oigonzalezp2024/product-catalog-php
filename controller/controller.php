<?php
$orden = $_GET['orden'];
if($orden == 'portafolioHombres'){
    header('Location: ../portafolio/caballero/index.php');
}if($orden == 'portafolioMujeres'){
    header('Location: ../portafolio/dama/index.php');
}if($orden == 'portafolioUnisex'){
    header('Location: ../portafolio/unisex/index.php');
}else if($orden == 'detalle'){
    header('Location: ../portafolio\caballero\presentacion_producto\index.php');
}else if($orden == 'agregarAlCarrito'){
    header('Location: ../portafolio/caballero/index.php');
}else if($orden == 'comprar'){
    header('Location: ../generate_pdf.php');
}
