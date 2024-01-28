<?php

namespace App\Facade;

class FilterFacade
{
    const FILTER_FIELDS = array(
        "Transaction UUID"=>array('id'=>'transactions'),
        "Customer Email"=>array('email'=>'client'),
        "Reference No" => array('reference_no'=>'transactions'),
        "Custom Data" => array('custom_data'=>'transactions'),
        "Card PAN" => array('number'=>'client')
    );
}
