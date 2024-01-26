<?php

namespace App\Services;

use App\DTO\ReportDTO;
use App\Http\Resources\Transaction\ReportCollection;
use App\Http\Resources\Transaction\TransactionCollection;
use App\Interfaces\ITransaction;
use Illuminate\Http\Request;

class TransactionService
{
    private ITransaction $transactionRepo;

    public function __construct(ITransaction $transaction)
    {
        $this->transactionRepo = $transaction;
    }

    public function getTransactionById(string $transactionId): TransactionCollection
    {
        return $this->transactionRepo->getTransaction($transactionId);
    }

    public function getList(Request $request):TransactionCollection
    {
        return $this->transactionRepo->getList($request);
    }

    public function getReport(Request $request):array
    {
        $getReport = $this->transactionRepo->getReport($request)->getArray();
        $getReport[] = array("status" => "APPROVED");


        return  $getReport;
    }
}
