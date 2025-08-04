<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\CompanyInterface;

class Company implements CompanyInterface
{
    private $name;
    private $adresss;
    private $phone;
    private $website;
    private $email;

    public function __construct($name, $adresss, $phone, $website, $email)
    {
        $this->name = $name;
        $this->adresss = $adresss;
        $this->phone = $phone;
        $this->website = $website;
        $this->email = $email;
    }
    
    function getName()
    {
        return $this->name;
    }
    function getAddress()
    {
        return $this->adresss;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getWebsite()
    {
        return $this->website;
    }
    function getEmail()
    {
        return $this->email;
    }
}
