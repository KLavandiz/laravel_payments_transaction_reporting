<?php

namespace App\Enum;

enum MessageEnum
{
    const DONT_HONOR = 'Do not honor';
    const INVALID_TRANSACTION = 'Invalid Transaction';
    const INVALID_CARD = 'Invalid Card';
    const NO_SUFFICIENT_BALANCE = 'Not sufficient funds';
    const INCORRECT_PIN = 'Incorrect PIN';

}
