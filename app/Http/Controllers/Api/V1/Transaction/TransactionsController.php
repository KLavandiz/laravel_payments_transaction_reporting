<?php

namespace App\Http\Controllers\Api\V1\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transaction\TransactionRequest;
use App\Services\TransactionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    private TransactionService $transactionService;

    public function __construct(TransactionService $service)
    {
        $this->transactionService = $service;
    }

    public function report(Request $request): JsonResponse
    {
        $report = $this->transactionService->getReport($request);

        return $this->success($report);
    }

    public function list(Request $request): JsonResponse
    {
        return $this->success($this->transactionService->getList($request)->getArray());
    }

    public function transaction(TransactionRequest $request): JsonResponse
    {
        $transaction = $this->transactionService->getTransactionById($request->transactionId);
        return $this->success($transaction->getArray());

    }
}
