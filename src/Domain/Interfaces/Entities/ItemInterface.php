<?php

namespace App\Domain\Interfaces\Entities;

interface ItemInterface
{
    function getProduct();
    function getQuantity();
    function getPrice();
}
