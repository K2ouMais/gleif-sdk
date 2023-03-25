<?php

namespace K2ouMais\Gleif\Requests\Jurisdictions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class JurisdictionById extends Request
{
    protected Method $method = Method::GET;

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/jurisdictions/' . $this->id;
    }
}
