<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiRecords\Isins\Isins;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request isins', function () {
    $request = $this->connector->send(new Isins('529900W18LQJJN6SJ336'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
