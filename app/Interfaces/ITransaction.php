<?php

namespace App\Interfaces;

use App\DTO\ReportDTO;
use App\Http\Resources\Transaction\ReportCollection;
use App\Http\Resources\Transaction\TransactionCollection;
use Illuminate\Http\Request;

interface ITransaction
{

    public function getTransaction(string $transactionId):TransactionCollection;
    public function getList(Request $request):TransactionCollection;
    public function getReport(Request $request):ReportCollection;


}
