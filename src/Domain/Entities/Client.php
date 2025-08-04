<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\ClientInterface;

class Client implements ClientInterface
{
    private $name;
    private $address;
    private $phone;
    private $email;

    public function __construct(
        $name,
        $address,
        $phone,
        $email,
    ) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }

    function getName()
    {
        return $this->name;
    }

    function getAddress()
    {
        return $this->address;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function getEmail()
    {
        return $this->email;
    }
}
