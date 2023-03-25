<?php

use K2ouMais\Gleif\GleifApi;
use Symfony\Component\HttpFoundation\Response;
use K2ouMais\Gleif\Requests\EntityLegalForms\AllEntityLegalForms;
use K2ouMais\Gleif\Requests\EntityLegalForms\EntityLegalFormById;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all entity legal forms', function () {
    $request = $this->connector->send(new AllEntityLegalForms());

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request all entity legal forms with pageSize and pageNumber', function () {
    $request = $this->connector->send(new AllEntityLegalForms($pageSize = 1, $pageNumber = 2));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->json('meta.pagination.currentPage'))
        ->toBe($pageNumber)
        ->and($request->json('meta.pagination.perPage'))
        ->toBe($pageSize)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request an entity legal form by id', function () {
    $request = $this->connector->send(new EntityLegalFormById('106J'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});