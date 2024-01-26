<?php

namespace App\Filters;

use Exception;
use Illuminate\Http\Request;

class CustomFilters
{
    public array $transactionParams = array(
        'fromDate' => array(0 => 'transactions.created_at', 1 => '>'),
        'toDate' => array(0 => 'transactions.created_at', 1 => '<'),
        'status' => array(0 => 'transactions.status', 1 => '='),
        'operation' => array(0 => 'transactions.operation', 1 => '='),
        'merchantId' => array(0 => 'transactions.merchant_id', 1 => '='),
        'acquirerId' => array(0 => 'transactions.acquirer_transaction_id', 1 => '=')
        ,'errorCode' => array(0 => 'transactions.message', 1 => '=')
    );

    public array $acquirersParams = array('paymentMethod' => array(0=>'acquirers.type',1=>'='));

    public function getTransactionQuery(Request $request)
    {


        $response = array();
        foreach ($this->transactionParams as $key => $value) {

            if (isset($request->$key)) {
                array_push($response, array($value[0], $value[1], $request->$key));
            }


        }

        return $response;
    }

    public function getAcquirersQuery(Request $request)
    {
        $response = array();
        foreach ($this->acquirersParams as $key => $value) {
            if (isset($request->$key)) array_push($response, array($value[0], $value[1], $request->$key));
        }

        return $response;
    }

}

