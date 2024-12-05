<?php

namespace Vinkas\Airwallex;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('airwallex', function ($app) {
            return new LaravelClient();
        });
    }
  }
