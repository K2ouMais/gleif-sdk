<?php

namespace K2ouMais\Gleif\Requests\EntityLegalForms;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class EntityLegalFormById extends Request
{
    protected Method $method = Method::GET;

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/entity-legal-forms/' . $this->id;
    }
}
