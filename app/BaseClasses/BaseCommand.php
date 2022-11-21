<?php

namespace App\BaseClasses;

use App\Helpers\ToArrayHelper;

abstract class BaseCommand
{
    use ToArrayHelper;

    protected string $command = '';
    protected mixed $data = null;
}
