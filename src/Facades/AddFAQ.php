<?php

namespace Aquadic\AddFAQ\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aquadic\AddFAQ\AddFAQ
 */
class AddFAQ extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Aquadic\AddFAQ\AddFAQ::class;
    }
}
