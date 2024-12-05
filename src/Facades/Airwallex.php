<?php

namespace Vinkas\Airwallex\Facades;

use Illuminate\Support\Facades\Facade;

class Airwallex extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'airwallex';
    }
}
