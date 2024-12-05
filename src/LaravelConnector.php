<?php

namespace Vinkas\Airwallex;

use Illuminate\Support\Facades\Cache;
use Vinkas\Airwallex\Connector;

class LaravelConnector extends Connector
{
    public function isAuthorized(): bool
    {
        return Cache::has(static::TOKEN_KEY);
    }

    public function getToken(): string
    {
        return Cache::get([static::TOKEN_KEY]);
    }

    public function setToken(string $token): void
    {
        Cache::put(static::TOKEN_KEY, $token, now()->addMinutes(30));
    }
}
