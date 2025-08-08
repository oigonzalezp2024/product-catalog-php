<?php
require __DIR__ . '/../../../vendor/autoload.php';

// Carga las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../../');
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
use App\Infrastructure\Repositories\ItemsRepository;

define('IMAGE_BASE_PATH', '../../images/'); // Ajusta esta ruta según la ubicación real de tus imágenes de ítems


// Inicia la sesión para poder usar las variables de sesión
session_start();

// Verifica que la variable 'orden' esté presente en la URL
if (isset($_GET['orden'])) {
    $orden = $_GET['orden'];

    if ($orden == 'portafolio') {
        header('Location: ../index.php');
        exit;
    } else if ($orden == 'detalle') {
        header('Location: ../presentacion_producto/index.php');
        exit;
    } else if ($orden == 'agregarALCarrito') {
        // $_SESSION['myItems'] = [];
        $itemid = $_GET['itemid'];
        $myImageRepository = new ItemsRepository();
        $item = $myImageRepository->findById($itemid);

        $product = [
            'product' => $item->getTitle(),
            'quantity' => $item->getQuantity(),
            'price' =>$item->getPrice()
        ];

        // Inicializa el array del carrito si no existe
        if (!isset($_SESSION['myItems'])) {
            $_SESSION['myItems'] = [];
        }

        // Agrega el nuevo producto al carrito
        $_SESSION['myItems'][] = $product;

        header('Location: ../index.php');
        exit;
    } else if ($orden == 'volverALPortafolio') {
        header('Location: ../index.php');
        exit;
    } else if ($orden == 'visualizarPedido') {
        // Asegúrate de que las rutas a los archivos incluidos sean correctas
        include '../../../client.php';
        
        // Obtiene el carrito de la sesión
        $myItems = $_SESSION['myItems'];

        // Incluye los archivos necesarios para la consolidación y generación del PDF
        include '../../../consolidacion.php';
        //header('Location: ../carrito.php');
        include '../carrito.php';
        exit;
    } else if ($orden == 'generarPedido') {
        // Asegúrate de que las rutas a los archivos incluidos sean correctas
        include '../../../client.php';
        
        // Obtiene el carrito de la sesión
        $myItems = $_SESSION['myItems'];

        // Incluye los archivos necesarios para la consolidación y generación del PDF
        include '../../../consolidacion.php';
        include './generate_pdf.php';
        exit;
    }
}
