<?php

namespace App\Repositories;

use App\Exceptions\GeneralException;
use App\Http\Resources\Client\ClientResource;
use App\Interfaces\IClient;
use App\Models\Client;
use App\Models\Transaction;


class ClientRepository implements IClient
{

    /**
     * @throws \ReflectionException
     * @throws GeneralException
     */
    public function getClient(string $transactionId): ClientResource
    {

        $clientInformation = Client::clientByTransactionId($transactionId)->get();

        if (!$clientInformation->count()) {

            throw new GeneralException(__('client.notFound'), 404);

        }

        return new ClientResource($clientInformation);
    }
}
