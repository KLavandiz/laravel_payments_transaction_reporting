<?php

namespace App\DTO;

class ReportDTO
{

    public int $count;

    public float $total;
    public string $currency;

    /**
     * @param int $count
     * @param float $total
     * @param string $currency
     */
    public function __construct(int $count, float $total, string $currency)
    {
        $this->count = $count;
        $this->total = $total;
        $this->currency = $currency;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }



}
