<?php

require __DIR__ . '/vendor/autoload.php';
require('./src/Infrastructure/Lib/Fpdf/fpdf.php');
require('./data.php');
require('./src/Infrastructure/AbstractPDFGenerator.php');
require('./src/Application/OrderPDFGenerator.php');

// Creamos una nueva instancia del generador de PDF y la ejecutamos
$pdf = new OrderPDFGenerator($page_info, $order_details);
$pdf->generate();
$pdf->Output('F','./pedidos/filename.pdf'); 
