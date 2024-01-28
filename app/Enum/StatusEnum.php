<?php

namespace App\Enum;

use Illuminate\Support\Facades\Facade;

enum StatusEnum
{
    const APPROVED = 'APPROVED';
    const WAITING = 'WAITING';
    const DECLINED = 'DECLINED';
    const ERROR = 'ERROR';

}
