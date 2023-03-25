<?php

use K2ouMais\Gleif\GleifApi;
use Symfony\Component\HttpFoundation\Response;
use K2ouMais\Gleif\Requests\FuzzyCompletions\FuzzyCompletions;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request fuzzy completions', function () {
    $request = $this->connector->send(new FuzzyCompletions('Apple', 'fulltext'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});