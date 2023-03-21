<?php

namespace K2ouMais\Gleif\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \K2ouMais\Gleif\Gleif
 */
class Gleif extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \K2ouMais\Gleif\Gleif::class;
    }
}
