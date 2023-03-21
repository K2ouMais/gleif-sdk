<?php

namespace K2ouMais\Gleif\Requests\LeiRecords\Lvl1Information;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class LeiRecordById extends Request
{
    protected Method $method = Method::GET;

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/lei-records/'.$this->id;
    }
}
