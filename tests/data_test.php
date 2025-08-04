<?php

// Datos generales de la página y el banner de la empresa
$page_info = [
    'title' => 'Resumen de Pedido - Tu Empresa',
    'description' => 'Revisa los detalles de tu pedido y completa tu pago.',
    'keywords' => 'pedido, pago, resumen, compra, tuempresa',
    'banner' => [
        'src' => './assets/images/banner.png',
        'alt' => 'Logo de Tu Empresa',
        'width' => 1200, // Ancho original de la imagen
        'height' => 400, // Alto original de la imagen
    ],
    'banner_pdf' => [
        'src' => './assets/images/banner_pdf.png',
        'alt' => 'Logo de Tu Empresa',
        'width' => 1200, // Ancho original de la imagen
        'height' => 400, // Alto original de la imagen
    ],
    'company' => [
        'name' => 'Tu Empresa S.A.S',
        'address' => 'Carrera 15 #10-25, Bogotá, Colombia',
        'phone' => '+57 300 123 4567',
        'website' => 'www.tuempresa.com',
        'email' => 'contacto@tuempresa.com',
    ]
];

// Datos dinámicos del pedido que se cargarían desde una base de datos o API
$order_details = [
    'order_id' => '4848418',
    'dest' => [
        [
            'name' => 'Nombre del cliente',
            'address' => 'Mz C4 torcoroma 2',
            'phone' => '+57 3212962876',
            'email' => 'oigonzalezp@gmail.com.co',
        ],
    ],
    'items' => [
        [
            'product' => 'Bolsa 30x40',
            'quantity' => 2,
            'price' => 10000,
        ],
        [
            'product' => 'bolsas 35X45',
            'quantity' => 1,
            'price' => 50000,
        ],
    ],
    'total_amount' => 70000,
    'payment_methods' => [
        [
            'entity' => 'Nequi',
            'account_number' => '0987654321',
            'holder_name' => 'Oscar Gonzalez',
            'qr_image' => [
                'src' => 'assets/images/qr_nequi.jpeg',
                'alt' => 'Código QR para pagar con Nequi',
                'width' => 100,
                'height' => 100
            ],
        ],
        [
            'entity' => 'Westerunion',
            'account_number' => '0987654321',
            'holder_name' => 'Oscar Gonzalez',
            'qr_image' => [
                'src' => 'assets/images/qr_nequi.jpeg',
                'alt' => 'Código QR para pagar con Nequi',
                'width' => 100,
                'height' => 100
            ],
        ],
    ],
];
