<?php
require_once __DIR__ . '/vendor/autoload.php';

// Carga las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Datos generales de la página y el banner de la empresa
use App\Domain\Interfaces\Entities\MyImageInterface;
use App\Domain\Interfaces\Entities\CompanyInterface;
use App\Domain\Interfaces\Entities\PageInfointerface;
use App\Domain\Interfaces\Entities\ClientInterface;
use App\Domain\Interfaces\Entities\ItemInterface;
use App\Domain\Interfaces\Entities\PaymentMethodsInterface;
use App\Domain\Interfaces\Entities\MyImageRepositoryInterface;

use App\Domain\Interfaces\Repositories\MyImageRepositoryInterfaces;
use App\Domain\Interfaces\Repositories\BannerPdfRepositoryInterfaces;
use App\Domain\Interfaces\Repositories\CompanyRepositoryInterfaces;

use App\Domain\Entities\MyImage;
use App\Domain\Entities\BannerPdf;
use App\Domain\Entities\Company;
use App\Domain\Entities\PageInfo;
use App\Domain\Entities\Client;
use App\Domain\Entities\Item;
use App\Domain\Entities\QrImage;
use App\Domain\Entities\PaymentMethods;

use App\Infrastructure\Repositories\BannerPdfRepository;
use App\Infrastructure\Repositories\CompanyRepository;
use App\Infrastructure\Repositories\MyImageRepository;

use App\Infrastructure\Adapter\WebAdapter;

// Calcula el total usando array_reduce()
$total_amount = array_reduce($myItems, function ($valorAcumulado, $item)
{
    return $valorAcumulado + ($item['quantity'] * $item['price']);
}, 0);

$qrs = [];
$src = 'assets/images/qr_nequi.jpeg';
$alt = 'Código QR para pagar con Nequi';
$width = 100;
$height = 100;
$qrImage = new QrImage(
    $src,
    $alt,
    $width,
    $height
);
array_push($qrs, $qrImage);

$src = 'assets/images/qr_nequi.jpeg';
$alt = 'Código QR para pagar con Nequi';
$width = 100;
$height = 100;
$qrImage = new QrImage(
    $src,
    $alt,
    $width,
    $height
);
array_push($qrs, $qrImage);

$qr_image = [
    [
        'src' => $qrs[0]->getSrc(),
        'alt' => $qrs[0]->getAlt(),
        'width' => $qrs[0]->getWidth(),
        'height' => $qrs[0]->getHeight(),
    ],
    [
        'src' => $qrs[1]->getSrc(),
        'alt' => $qrs[1]->getAlt(),
        'width' => $qrs[1]->getWidth(),
        'height' => $qrs[1]->getHeight(),
    ]
];

$payment_methods = [];

$entity = 'Nequi';
$account_number = '0987654321';
$holder_name = 'Oscar Gonzalez';
$iTqrImage = $qr_image[0];
$paymentMethods = new PaymentMethods(
    $entity,
    $account_number,
    $holder_name,
    $iTqrImage
);
$payment_method = [
    'entity' => $paymentMethods->getEntity(),
    'account_number' => $paymentMethods->getAccountNumber(),
    'holder_name' => $paymentMethods->getHolderName(),
    'qr_image' => $paymentMethods->getQrImage(),
];
array_push($payment_methods, $payment_method);

$entity = 'Westerunion';
$account_number = '0987654321';
$holder_name = 'Oscar Gonzalez';
$iTqrImage = $qr_image[1];
$paymentMethods = new PaymentMethods(
    $entity,
    $account_number,
    $holder_name,
    $iTqrImage
);
$payment_method = [
    'entity' => $paymentMethods->getEntity(),
    'account_number' => $paymentMethods->getAccountNumber(),
    'holder_name' => $paymentMethods->getHolderName(),
    'qr_image' => $paymentMethods->getQrImage(),
];
array_push($payment_methods, $payment_method);

// Datos dinámicos del pedido que se cargarían desde una base de datos o API
$order_details = [
    'order_id' => '48484186666',
    'dest' => [
        [
            'name' => $client->getName(),
            'address' => $client->getAddress(),
            'phone' => $client->getPhone(),
            'email' => $client->getEmail(),
        ],
    ],
    'items' => $myItems,
    'total_amount' => "".$total_amount,
    'payment_methods' => $payment_methods,
];

$order_id = $order_details['order_id'];

$data = [
    // Datos del usuario y el pedido
    'user_name' => 'Oscar Ivan Gonzalez Peña',
    'order_id' => $order_id,
    'view_order_url' => $_ENV['VIEW_ORDER_URL'] . '/' . $order_id,
    'customer_service_email' => $_ENV['CUSTOMER_SERVICE_EMAIL'],

    // Credenciales y configuración del servidor SMTP
    'smtp_username' => $_ENV['SMTP_USERNAME'],
    'smtp_password' => $_ENV['SMTP_PASSWORD'],

    // Configuración del remitente
    'from_email' => $_ENV['FROM_EMAIL'],
    'from_name' => $_ENV['FROM_NAME'],
    
    // Rutas a archivos de la plantilla y adjunto
    'template_path' => $_ENV['TEMPLATE_PATH'],
    'attachment_path' => '../../../'.$_ENV['ATTACHMENT_PATH'] . 'pedido-'.$order_id.'.pdf',
    'attachment_name' => 'pedido-'.$order_id.'.pdf',

    // Información de la empresa
    'company_name' => 'Babull.com.co',
    'company_address' => $_ENV['COMPANY_ADDRESS'],
    'company_website' => $_ENV['COMPANY_WEBSITE'],
    
    // Destinatarios del correo
    'recipients' => [
        [
            'email' => 'oigonzalezp2024@gmail.com',
            'name'  => 'Oscar Ivan Gonzalez Peña' // El cliente
        ],
        [
            'email' => $_ENV['CUSTOMER_SERVICE_EMAIL'],
            'name'  => 'Atención al Cliente' // El equipo de soporte
        ],
    ],
];
