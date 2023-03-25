<?php

namespace K2ouMais\Gleif\Requests\AutoCompletions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AutoCompletions extends Request
{
    protected Method $method = Method::GET;

    private string $search;

    private string $field;

    /**
     * @param string $search
     * Example: Apple
     * @param string $filter
     * Default: fulltext (Options: 'fulltext', 'owns' or 'ownedBy')
     */
    public function __construct(string $search, string $field = 'fulltext')
    {
        $this->search = $search;
        $this->field = $field;
    }

    public function resolveEndpoint(): string
    {
        return '/v1/fuzzycompletions';
    }

    protected function defaultQuery(): array
    {
        return [
            'q' => $this->search,
            'field' => $this->field,
        ];
    }
}
