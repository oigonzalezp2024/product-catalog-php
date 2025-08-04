<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\ClientRepositoryInterface;
use App\Domain\Entities\Client;

class ClientRepository implements ClientRepositoryInterface
{
    function findClient(){
        $name = 'Nombre del cliente';
        $address = 'Mz C4 torcoroma 2';
        $phone = '+57 3212962876';
        $email = 'oigonzalezp@gmail.com.co';
        $client = new Client(
        $name,
        $address,
        $phone,
        $email  
        );

        $cli =  [
            [
                'name' => $client->getName(),
                'address' => $client->getAddress(),
                'phone' => $client->getPhone(),
                'email' => $client->getEmail(),
            ],
        ];

        return $cli;
    }
}
