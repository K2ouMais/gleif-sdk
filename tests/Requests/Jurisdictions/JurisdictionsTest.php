<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\Jurisdictions\AllJurisdictions;
use K2ouMais\Gleif\Requests\Jurisdictions\JurisdictionById;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all jurisdictions', function () {
    $request = $this->connector->send(new AllJurisdictions());

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request all jurisdictions with pageSize and pageNumber', function () {
    $request = $this->connector->send(new AllJurisdictions($pageSize = 1, $pageNumber = 2));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->json('meta.pagination.currentPage'))
        ->toBe($pageNumber)
        ->and($request->json('meta.pagination.perPage'))
        ->toBe($pageSize)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a jurisdiction by id', function () {
    $request = $this->connector->send(new JurisdictionById('DE'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
