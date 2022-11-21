<?php

namespace App\Exceptions;

use App\BaseClasses\BaseException;
use Throwable;

class UnknownActionException extends BaseException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = sprintf('Unknown action "%s"', $message);
        parent::__construct($message, $code, $previous);
    }
}
