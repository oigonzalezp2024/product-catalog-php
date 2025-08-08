<?php
require __DIR__ . '/vendor/autoload.php';

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