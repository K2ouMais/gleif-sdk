<?php

namespace K2ouMais\Gleif\Requests\Countries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class CountryCodeById extends Request
{
    protected Method $method = Method::GET;

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/countries/'.$this->id;
    }
}
