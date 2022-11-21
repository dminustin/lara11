<?php

namespace App\Helpers;

trait ToArrayHelper
{
    public function toArray(): array
    {
        $result = [];
        foreach (get_object_vars($this) as $varName => $value) {
            $result[$this->varMapping[$varName] ?? $varName] = $value;
        }
        return $result;
    }
}
