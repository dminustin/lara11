<?php

namespace App\Commands;

use App\BaseClasses\BaseCommand;

class SetTokenCommand extends BaseCommand
{
    protected string $command = 'set_token';

    public function __construct(string $token)
    {
        $this->data = $token;
    }
}
