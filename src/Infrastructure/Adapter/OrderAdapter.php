<?php

namespace App\Infrastructure\Adapter;

use App\Domain\Interfaces\Adapter\OrderAdapterInterface;
use App\Domain\Interfaces\Repositories\ClientRepositoryInterface;
use App\Domain\Interfaces\Repositories\ItemsRepositoryInterface;
use App\Domain\Interfaces\Repositories\QrImageRepositoryInterface;
use App\Domain\Interfaces\Repositories\PaymentMethodsRepositoryInterface;

class OrderAdapter implements OrderAdapterInterface
{
    private ClientRepositoryInterface $clientRepository;
    private ItemsRepositoryInterface $itemsRepository;
    private QrImageRepositoryInterface $qrImageRepository;
    private PaymentMethodsRepositoryInterface $paymentMethodsRepository;
    private array $output;

    public function __construct(
        ClientRepositoryInterface $clientRepository, 
        ItemsRepositoryInterface $itemsRepository,
        QrImageRepositoryInterface $qrImageRepository,
        PaymentMethodsRepositoryInterface $paymentMethodsRepository
        ) {
        $this->clientRepository = $clientRepository;
        $this->itemsRepository = $itemsRepository;
        $this->qrImageRepository = $qrImageRepository;
        $this->paymentMethodsRepository = $paymentMethodsRepository;
    }

    function run(
        $client,
        $myItems,
        $payment_methods,
        )
    {
       $this->output = [
            'order_id' => '4848418',
            'dest' => $client,
            'items' => $myItems,
            'total_amount' => 70000,
            'payment_methods' => $payment_methods,
        ];
    }

    function orderDetails()
    {
        $client = $this->clientRepository->findClient();
        $myItems = $this->itemsRepository->findItems();
        $qr_image = $this->qrImageRepository->findQrImage();
        $payment_methods = $this->paymentMethodsRepository->findPaymentMethods($qr_image);
        
        $this->run($client, $myItems, $payment_methods);

        return $this->output;
    }
}
