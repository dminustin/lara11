<?php

namespace App\Commands;

use App\BaseClasses\BaseCommand;
use App\Helpers\StatusesList;

class StatusesCommand extends BaseCommand
{
    protected string $command = 'statuses';

    public function __construct(StatusesList $statuses)
    {
        $this->data = $statuses->toArray();
    }
}
