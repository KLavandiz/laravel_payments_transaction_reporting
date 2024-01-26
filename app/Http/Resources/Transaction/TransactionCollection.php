<?php

namespace App\Http\Resources\Transaction;

use App\DTO\TransactionDTO;
use App\Http\Resources\BaseCollection;

class TransactionCollection extends BaseCollection
{

    protected string $collectionClass = TransactionDTO::class;

    public function toArray($collect): array
    {
        return [

            'id' => $collect->id,
            'referenceNo' => $collect->reference_no,
            'merchantId' => $collect->merchant_id,
            'status' => $collect->status,
            'channel' => $collect->channel,
            'customData' => $collect->custom_data,
            'chainId' => $collect->chain_id,
            'agentInfoId' => $collect->agent_info_id,
            'operation' => $collect->operation,
            'fxTransactionId' => $collect->fx_transaction_id,
            'acquirerTransactionId' => $collect->acquirer_transaction_id,
            'code' => $collect->code,
            'message' => $collect->message,
            'transactionId' => $collect->transaction_id,
            'refundable' => (bool)$collect->refundable,
            'clientId' => $collect->client_id,
            'acquirer' => $collect->acquirer->toArray(),
            'agent' => $collect->agent->toArray(),
            'client' => $collect->client->toArray(),
            'fx' => $collect->fx->toArray(),
            'merchant' => $collect->merchant->toArray(),

        ];
    }

    /**
     * @throws \ErrorException
     */
    public function add(TransactionDTO $listDTO): void
    {
        $this->push($listDTO);
    }
}
