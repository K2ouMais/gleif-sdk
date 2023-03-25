<?php

namespace K2ouMais\Gleif\Requests\LeiIssuers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AllLeiIssuers extends Request
{
    protected Method $method = Method::GET;

    protected int $pageSize;

    protected int $pageNumber;

    public function __construct(int $pageSize = 100, int $pageNumber = 1)
    {
        $this->pageSize = $pageSize;
        $this->pageNumber = $pageNumber;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/lei-issuers';
    }

    protected function defaultQuery(): array
    {
        return [
            'page[size]' => $this->pageSize,
            'page[number]' => $this->pageNumber,
        ];
    }
}
