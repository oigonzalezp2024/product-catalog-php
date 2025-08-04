<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\CompanyRepositoryInterface;
use App\Domain\Entities\Company;

class CompanyRepository implements CompanyRepositoryInterface
{
    function findMyCompany()
    {
        $name = "Tu Empresa S.A.S";
        $adresss = "Carrera 15 #10-25, Bogotá, Colombia";
        $phone = "+57 300 123 4567";
        $website = "www.tuempresa.com";
        $email = "contacto@tuempresa.com";
        return new Company($name, $adresss, $phone, $website, $email);
    }
}
