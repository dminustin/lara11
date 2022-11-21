<?php

namespace App\Commands;

use App\BaseClasses\BaseCommand;

class MessageCommand extends BaseCommand
{
    protected string $command = 'message';

    public function __construct(string $message, string $icon = 'info')
    {
        $this->data = [$message, $icon];
    }
}
