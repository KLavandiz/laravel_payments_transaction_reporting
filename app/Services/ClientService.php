<?php

namespace App\Services;

use App\Http\Resources\Client\ClientResource;
use App\Interfaces\IClient;

class ClientService
{
    private IClient $clientRepo;

    public function __construct(IClient $client)
    {
        $this->clientRepo = $client;
    }

    public function getClient(string $transactionId):ClientResource
    {
        return $this->clientRepo->getClient($transactionId);
    }

}
