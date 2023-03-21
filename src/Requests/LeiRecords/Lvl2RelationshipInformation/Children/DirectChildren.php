<?php

namespace K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DirectChildren extends Request
{
    protected Method $method = Method::GET;

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/lei-records/'.$this->id.'/direct-children';
    }
}
