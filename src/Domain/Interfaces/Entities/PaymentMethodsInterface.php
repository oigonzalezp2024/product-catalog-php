<?php

namespace App\Domain\Interfaces\Entities;

interface PaymentMethodsInterface
{
    function getEntity();
    function getAccountNumber();
    function getHolderName();
    function getQrImage();
}
