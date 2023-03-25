<?php

namespace K2ouMais\Gleif\Requests\RegistrationAgents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AllRegistrationAgents extends Request
{
    protected Method $method = Method::GET;

    private string $leiIssuer;

    private string $lei;

    public function __construct(string $leiIssuer = '', string $lei = '')
    {
        $this->leiIssuer = $leiIssuer;
        $this->lei = $lei;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/registration-agents';
    }

    protected function defaultQuery(): array
    {
        return [
            'filter[leiIssuer]' => $this->leiIssuer,
            'filter[lei]' => $this->lei,
        ];
    }
}
