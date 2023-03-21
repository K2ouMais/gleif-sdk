<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl1Information\AllLeiRecords;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl1Information\LeiRecordById;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all lei records', function () {
    $request = $this->connector->send(new AllLeiRecords(5));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
});

it('can request all lei records with pageSize and pageNumber', function () {
    $request = $this->connector->send(new AllLeiRecords($pageSize = 1, $pageNumber = 2));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->json('meta.pagination.currentPage'))
        ->toBe($pageNumber)
        ->and($request->json('meta.pagination.perPage'))
        ->toBe($pageSize);
});

it('can request a specific lei record', function () {
    $request = $this->connector->send(new LeiRecordById('5299000J2N45DDNE4Y28'));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
});
