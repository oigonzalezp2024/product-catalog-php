<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\PaymentMethodsInterface;

class PaymentMethods implements PaymentMethodsInterface
{
    private $entity;
    private $account_number;
    private $holder_name;
    private $qrImage;

    public function __construct(
        $entity,
        $account_number,
        $holder_name,
        $qrImage
    ) {
        $this->entity = $entity;
        $this->account_number = $account_number;
        $this->holder_name = $holder_name;
        $this->qrImage = $qrImage;
    }
    function getEntity()
    {
        return $this->entity;
    }
    function getAccountNumber()
    {
        return $this->account_number;
    }
    function getHolderName()
    {
        return $this->holder_name;
    }
    function getQrImage()
    {
        return $this->qrImage;
    }
}
