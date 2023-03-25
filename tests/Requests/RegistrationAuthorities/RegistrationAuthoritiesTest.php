<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\RegistrationAuthorities\AllRegistrationAuthorities;
use K2ouMais\Gleif\Requests\RegistrationAuthorities\RegistrationAuthorityById;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all registration authorities', function () {
    $request = $this->connector->send(new AllRegistrationAuthorities());

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request all registration authorities with pageSize and pageNumber', function () {
    $request = $this->connector->send(new AllRegistrationAuthorities($pageSize = 1, $pageNumber = 2));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->json('meta.pagination.currentPage'))
        ->toBe($pageNumber)
        ->and($request->json('meta.pagination.perPage'))
        ->toBe($pageSize)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a registration authority by id', function () {
    $request = $this->connector->send(new RegistrationAuthorityById('RA000001'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
