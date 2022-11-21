<?php

namespace App\BaseClasses;

use Exception;

class BaseException extends Exception
{
    protected $code = 0;
    protected $message = 'An error occurred';
}
