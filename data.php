<?php
require __DIR__ . '/vendor/autoload.php';

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

$myImageRepository = new MyImageRepository();
$bannerPdfRepository = new BannerPdfRepository();
$companyRepository = new CompanyRepository();

$web = new WebAdapter(
    $myImageRepository,
    $bannerPdfRepository,
    $companyRepository
);
$page_info = $web->result();

$name = 'Nombre del cliente';
$address = 'Mz C4 torcoroma 2';
$phone = '+57 3212962876';
$email = 'oigonzalezp@gmail.com.co';
$client = new Client(
$name,
$address,
$phone,
$email  
);

$items = [];
$product = 'Bolsa 30x40';
$quantity = 2;
$price = 10000;
$item = new Item(
    $product,
    $quantity,
    $price
);
array_push($items, $item);
$product = 'bolsas 35X45';
$quantity = 1;
$price = 50000;
$item = new Item(
    $product,
    $quantity,
    $price
);
array_push($items, $item);

$myItems = [
    [
        'product' => $items[0]->getProduct(),
        'quantity' => $items[0]->getQuantity(),
        'price' => $items[0]->getPrice(),
    ],
    [
        'product' => $items[1]->getProduct(),
        'quantity' => $items[1]->getQuantity(),
        'price' => $items[1]->getPrice(),
    ]
];

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
    'order_id' => '4848418',
    'dest' => [
        [
            'name' => $client->getName(),
            'address' => $client->getAddress(),
            'phone' => $client->getPhone(),
            'email' => $client->getEmail(),
        ],
    ],
    'items' => $myItems,
    'total_amount' => 70000,
    'payment_methods' => $payment_methods,
];
