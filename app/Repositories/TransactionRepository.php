<?php

namespace App\Repositories;


use App\Exceptions\GeneralException;
use App\Facade\FilterFacade;
use App\Facade\StatusFacade;
use App\Filters\CustomFilters;
use App\Filters\Transaction\ListFilters;
use App\Http\Resources\Transaction\ReportCollection;
use App\Http\Resources\Transaction\TransactionCollection;
use App\Interfaces\ITransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionRepository implements ITransaction
{

    /**
     * @throws \ReflectionException
     */
    public function getTransaction(string $transactionId): TransactionCollection
    {
        $transaction = Transaction::with(['acquirer', 'agent', 'client', 'fx', 'merchant'])->where('transaction_id', $transactionId)->get();

        if (!$transaction->count()) {

            throw new GeneralException(__('transaction.notFound'), 404);

        }

        return new TransactionCollection($transaction);
    }

    /**
     * @throws \ReflectionException
     */
    public function getList(Request $request): TransactionCollection
    {
        $safeKeyArray = FilterFacade::FILTER_FIELDS;
        $filterField = data_get($request, 'filterField', -1);
        $filterValue = data_get($request, 'filterValue', -1);

        if (($filterField != -1) && !array_key_exists($filterField, $safeKeyArray)) {

            if (!isset($safeKeyArray[$filterField])) {
                throw new GeneralException(__('transaction.invalidFilterKey'), 404);
            }

        }


        $filter = new ListFilters();

        $transParameters = $filter->getTransactionQuery($request);

        $acquirerParameters = $filter->getAcquirersQuery($request);


        if ($filterField != -1) {
            $keys = array_keys($safeKeyArray[$filterField]);
            $tableName = $safeKeyArray[$filterField][$keys[0]];
            $columnName = $keys[0];

            $transaction = Transaction::with(['acquirer', 'agent', 'client', 'fx', 'merchant'])->where($transParameters)->
            whereHas('acquirer', function ($query) use ($acquirerParameters) {
                $query->where($acquirerParameters);
            })->whereHas($tableName, function ($query) use ($columnName, $filterValue) {
                $query->where($columnName, $filterValue);
            })->paginate();
        } else {
            $transaction = Transaction::with(['acquirer', 'agent', 'client', 'fx', 'merchant'])->where($transParameters)
                ->where($transParameters)->
                whereHas('acquirer', function ($query) use ($acquirerParameters) {
                    $query->where($acquirerParameters);
                })->paginate();
        }
        if (!$transaction->count()) {

            throw new GeneralException(__('transaction.notFound'), 404);

        }

        return new TransactionCollection($transaction);

    }

    /**
     * @throws \ReflectionException
     */
    public function getReport(Request $request): ReportCollection
    {
        $filter = new CustomFilters();

        $transParameters = $filter->getTransactionQuery($request);

        $acquirerParameters = $filter->getAcquirersQuery($request);

        $report = Transaction::join('foreign_exchanges', 'transactions.fx_transaction_id', '=', 'foreign_exchanges.id')
            ->where('transactions.status', StatusFacade::APPROVED)->where($transParameters)->
            whereHas('acquirer', function ($query) use ($acquirerParameters) {
                $query->where($acquirerParameters);
            })
            ->select('foreign_exchanges.original_currency', DB::raw('sum(foreign_exchanges.original_amount) as total'), DB::raw('count(foreign_exchanges.original_amount) as count'))
            ->groupBy('foreign_exchanges.original_currency')
            ->get();


        return new ReportCollection($report);
    }
}
