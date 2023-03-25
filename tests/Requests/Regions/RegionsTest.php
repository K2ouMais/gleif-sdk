<?php

use K2ouMais\Gleif\GleifApi;
use Symfony\Component\HttpFoundation\Response;
use K2ouMais\Gleif\Requests\Regions\AllRegions;
use K2ouMais\Gleif\Requests\Regions\RegionById;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all regions', function () {
    $request = $this->connector->send(new AllRegions());

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request all regions with pageSize and pageNumber', function () {
    $request = $this->connector->send(new AllRegions($pageSize = 1, $pageNumber = 2));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->json('meta.pagination.currentPage'))
        ->toBe($pageNumber)
        ->and($request->json('meta.pagination.perPage'))
        ->toBe($pageSize)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a region by id', function () {
    $request = $this->connector->send(new RegionById('DE-HE'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});