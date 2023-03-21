<?php

namespace K2ouMais\Gleif\Requests\LeiRecords\Lvl1Information;

use Saloon\Http\Request;
use Saloon\Enums\Method;

class AllLeiRecords extends Request
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
        return '/v1/lei-records';
    }

    protected function defaultQuery(): array
    {
        return [
            'page[size]' => $this->pageSize,
            'page[number]' => $this->pageNumber,
        ];
    }

}