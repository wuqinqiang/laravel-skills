<?php

namespace App\Http\Mixin;

class StrMixin
{
    public function partNumber()
    {
        return function ($path) {
            return 'abc' . '-' . substr($path, 0, 3);
        };
    }

    public function prefixString()
    {
        return function ($path, $prefix = 'curry') {
            return $prefix . $path;
        };
    }
}