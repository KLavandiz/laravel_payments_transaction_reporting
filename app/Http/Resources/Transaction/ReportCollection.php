<?php

namespace App\Http\Resources\Transaction;

use App\DTO\ReportDTO;
use App\Http\Resources\BaseCollection;

class ReportCollection extends BaseCollection
{
    protected string $collectionClass = ReportDTO::class;

    public function toArray($collect): array
    {
        return [

            'count' => (int)$collect->count,
            'total' => (float)$collect->total,
            'currency' => $collect->original_currency,

        ];
    }
    public function add(ReportDTO $listDTO): void
    {
        $this->push($listDTO);
    }

}
