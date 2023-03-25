<?php

namespace K2ouMais\Gleif\Requests\Countries;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AllCountryCodes extends Request
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
        return '/v1/countries';
    }

    protected function defaultQuery(): array
    {
        return [
            'page[size]' => $this->pageSize,
            'page[number]' => $this->pageNumber,
        ];
    }
}
