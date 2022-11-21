<?php

namespace App\Actions;

use App\BaseClasses\BaseAction;

class FirstDummyAction extends BaseAction
{
    protected array $validationRules = [
        'id'=>'int|required',
        'name'=>'string|required|min:3|max:12'
    ];

    public function handle()
    {
        return (rand(0,10) > 50) ? false: $this->data;
    }
}
