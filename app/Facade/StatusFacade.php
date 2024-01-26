<?php

namespace App\Facade;

use Illuminate\Support\Facades\Facade;

class StatusFacade extends Facade
{
    const APPROVED = 'APPROVED';
    const WAITING = 'WAITING';
    const DECLINED = 'DECLINED';
    const ERROR = 'ERROR';

}
