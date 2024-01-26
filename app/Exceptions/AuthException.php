<?php

namespace App\Exceptions;

class AuthException extends \Exception
{

    protected $message =  'Login failed';
    protected  $code = 401;
}
