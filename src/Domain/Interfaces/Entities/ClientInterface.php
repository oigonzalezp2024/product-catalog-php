<?php

namespace App\Domain\Interfaces\Entities;

interface ClientInterface
{
    function getName();
    function getAddress();
    function getPhone();
    function getEmail();
}
