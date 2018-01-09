<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class RequestException extends ExceptionHandler
{

    public function unlogged(Exception $exception)
    {
        echo "please log in";
    }


}
