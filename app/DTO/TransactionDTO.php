<?php

namespace App\DTO;

class TransactionDTO
{

        public int $id;
        public string $referenceNo;
        public int $merchantId;
        public string $status;
        public string $channel;
        public ?string $customData;
        public string $chainId;
        public int $agentInfoId;
        public string $operation;
        public int $fxTransactionId;
        public int $acquirerTransactionId;
        public string $code;
        public string $message;
        public  string $transactionId;
        public bool $refundable;
        public int $clientId;
        public array $acquirer;
        public array $agent;
        public array $client;
        public array $fx;
        public array $merchant;

    /**
     * @param int $id
     * @param string $referenceNo
     * @param int $merchantId
     * @param string $status
     * @param string $channel
     * @param string|null $customData
     * @param string $chainId
     * @param int $agentInfoId
     * @param string $operation
     * @param int $fxTransactionId
     * @param int $acquirerTransactionId
     * @param string $code
     * @param string $message
     * @param string $transactionId
     * @param bool $refundable
     * @param int $clientId
     * @param array $acquirer
     * @param array $agent
     * @param array $client
     * @param array $fx
     * @param array $merchant
     */
    public function __construct(int $id, string $referenceNo, int $merchantId, string $status, string $channel, ?string $customData, string $chainId, int $agentInfoId, string $operation, int $fxTransactionId, int $acquirerTransactionId, string $code, string $message, string $transactionId, bool $refundable, int $clientId, array $acquirer, array $agent, array $client, array $fx, array $merchant)
    {
        $this->id = $id;
        $this->referenceNo = $referenceNo;
        $this->merchantId = $merchantId;
        $this->status = $status;
        $this->channel = $channel;
        $this->customData = $customData;
        $this->chainId = $chainId;
        $this->agentInfoId = $agentInfoId;
        $this->operation = $operation;
        $this->fxTransactionId = $fxTransactionId;
        $this->acquirerTransactionId = $acquirerTransactionId;
        $this->code = $code;
        $this->message = $message;
        $this->transactionId = $transactionId;
        $this->refundable = $refundable;
        $this->clientId = $clientId;
        $this->acquirer = $acquirer;
        $this->agent = $agent;
        $this->client = $client;
        $this->fx = $fx;
        $this->merchant = $merchant;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getReferenceNo(): string
    {
        return $this->referenceNo;
    }

    public function setReferenceNo(string $referenceNo): void
    {
        $this->referenceNo = $referenceNo;
    }

    public function getMerchantId(): int
    {
        return $this->merchantId;
    }

    public function setMerchantId(int $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    public function getCustomData(): ?string
    {
        return $this->customData;
    }

    public function setCustomData(?string $customData): void
    {
        $this->customData = $customData;
    }

    public function getChainId(): string
    {
        return $this->chainId;
    }

    public function setChainId(string $chainId): void
    {
        $this->chainId = $chainId;
    }

    public function getAgentInfoId(): int
    {
        return $this->agentInfoId;
    }

    public function setAgentInfoId(int $agentInfoId): void
    {
        $this->agentInfoId = $agentInfoId;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }

    public function setOperation(string $operation): void
    {
        $this->operation = $operation;
    }

    public function getFxTransactionId(): int
    {
        return $this->fxTransactionId;
    }

    public function setFxTransactionId(int $fxTransactionId): void
    {
        $this->fxTransactionId = $fxTransactionId;
    }

    public function getAcquirerTransactionId(): int
    {
        return $this->acquirerTransactionId;
    }

    public function setAcquirerTransactionId(int $acquirerTransactionId): void
    {
        $this->acquirerTransactionId = $acquirerTransactionId;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    public function isRefundable(): bool
    {
        return $this->refundable;
    }

    public function setRefundable(bool $refundable): void
    {
        $this->refundable = $refundable;
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function setClientId(int $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getAcquirer(): array
    {
        return $this->acquirer;
    }

    public function setAcquirer(array $acquirer): void
    {
        $this->acquirer = $acquirer;
    }

    public function getAgent(): array
    {
        return $this->agent;
    }

    public function setAgent(array $agent): void
    {
        $this->agent = $agent;
    }

    public function getClient(): array
    {
        return $this->client;
    }

    public function setClient(array $client): void
    {
        $this->client = $client;
    }

    public function getFx(): array
    {
        return $this->fx;
    }

    public function setFx(array $fx): void
    {
        $this->fx = $fx;
    }

    public function getMerchant(): array
    {
        return $this->merchant;
    }

    public function setMerchant(array $merchant): void
    {
        $this->merchant = $merchant;
    }


}
