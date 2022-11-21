<?php

namespace Tests;

use App\BaseClasses\BaseAction;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseMigrations;

    protected function getAction(): BaseAction
    {
        $class = preg_replace(
            '/Tests\\\Unit\\\(.*?)Test/',
            'App\\Actions\\\$1Action',
            static::class
        );
        $this->assertTrue(class_exists($class));
        return new $class;
    }

}
