<?php

namespace App\Http\Controllers\Api\V1\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientRequest;
use App\Services\ClientService;

class ClientController extends Controller
{
    private ClientService $clientService;

    public function __construct(ClientService $client)
    {
        $this->clientService = $client;
    }

    public function getClient(ClientRequest $request)
    {
        $clientResource = $this->clientService->getClient($request->transactionId);
        return $this->success($clientResource->getArray());
    }
}
