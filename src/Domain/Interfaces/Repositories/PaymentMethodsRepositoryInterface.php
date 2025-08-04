<?php

namespace App\Domain\Interfaces\Repositories;

interface PaymentMethodsRepositoryInterface
{
    function findPaymentMethods($qr_image);
}
