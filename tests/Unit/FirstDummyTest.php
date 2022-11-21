<?php

namespace Tests\Unit;

use Tests\TestCase;

class FirstDummyTest extends TestCase
{
    public function testDummyAction()
    {
        $action = $this->getAction();
        $result  = $action
            ->setData([
                'id'=>123,
                'name'=>'test'
            ])
            ->handle();
    }
}
