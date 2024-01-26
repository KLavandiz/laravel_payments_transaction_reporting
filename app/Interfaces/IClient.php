<?php

namespace App\Interfaces;

use App\Http\Resources\Client\ClientResource;

interface IClient
{
    public function getClient(string $transactionId):ClientResource;

}
