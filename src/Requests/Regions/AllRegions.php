<?php

namespace K2ouMais\Gleif\Requests\Regions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AllRegions extends Request
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
        return '/v1/regions';
    }

    protected function defaultQuery(): array
    {
        return [
            'page[size]' => $this->pageSize,
            'page[number]' => $this->pageNumber,
        ];
    }
}
