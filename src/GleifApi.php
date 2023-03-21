<?php

namespace K2ouMais\Gleif;

use Saloon\Http\Connector;

class GleifApi extends Connector
{
    public function resolveBaseUrl(): string
    {
        return config('gleif-sdk.gleif-api.url');
    }
}
