<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\Countries\AllCountryCodes;
use K2ouMais\Gleif\Requests\Countries\CountryCodeById;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all country codes', function () {
    $request = $this->connector->send(new AllCountryCodes());

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request all country codes with pageSize and pageNumber', function () {
    $request = $this->connector->send(new AllCountryCodes($pageSize = 1, $pageNumber = 2));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->json('meta.pagination.currentPage'))
        ->toBe($pageNumber)
        ->and($request->json('meta.pagination.perPage'))
        ->toBe($pageSize)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a country code by id', function () {
    $request = $this->connector->send(new CountryCodeById('DE'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
