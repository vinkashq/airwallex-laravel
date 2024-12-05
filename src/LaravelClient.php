<?php

namespace Vinkas\Airwallex;

use Vinkas\Airwallex\Client;

class LaravelClient extends Client
{
    public function getConnector(): LaravelConnector
    {
        return new LaravelConnector();
    }
}
