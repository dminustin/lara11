<?php

namespace App\Commands;

use App\BaseClasses\BaseCommand;

class RedirectCommand extends BaseCommand
{
    protected string $command = 'redirect';

    public function __construct(string $url)
    {
        $this->data = $url;
    }
}
