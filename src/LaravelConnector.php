<?php

namespace Vinkas\Airwallex;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Vinkas\Airwallex\Connector;

class LaravelConnector extends Connector
{
    public function isAuthorized(): bool
    {
        return Cache::has(static::TOKEN_KEY);
    }

    public function getToken(): string
    {
        return Cache::get(static::TOKEN_KEY);
    }

    public function setToken(string $token): void
    {
        Cache::put(static::TOKEN_KEY, $token, now()->addMinutes(30));
    }

    public function getClientId(): string
    {
        return Config::get('services.airwallex.client_id');
    }

    public function getApiKey(): string
    {
        return Config::get('services.airwallex.api_key');
    }
}
