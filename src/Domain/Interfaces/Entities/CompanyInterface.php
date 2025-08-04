<?php

namespace App\Domain\Interfaces\Entities;

interface CompanyInterface
{
    function getName();
    function getAddress();
    function getPhone();
    function getWebsite();
    function getEmail();
}
