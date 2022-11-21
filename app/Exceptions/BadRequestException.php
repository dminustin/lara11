<?php

namespace App\Exceptions;

use App\BaseClasses\BaseException;

class BadRequestException extends BaseException
{
    protected $code = 400;
}
