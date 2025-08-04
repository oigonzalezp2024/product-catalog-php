<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\PaymentMethodsRepositoryInterface;
use App\Domain\Entities\PaymentMethods;

class PaymentMethodsRepository implements PaymentMethodsRepositoryInterface
{
    function findPaymentMethods($qr_image)
    {
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
        return $payment_methods;
    }
}
