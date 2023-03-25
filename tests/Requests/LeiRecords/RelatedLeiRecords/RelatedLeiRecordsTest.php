<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiRecords\RelatedLeiRecords\AssociatedEntity;
use K2ouMais\Gleif\Requests\LeiRecords\RelatedLeiRecords\ManagingLou;
use K2ouMais\Gleif\Requests\LeiRecords\RelatedLeiRecords\SuccessorEntity;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request an associated entity', function () {
    $request = $this->connector->send(new AssociatedEntity('335800OGLWMREXSGH297'));

    expect($request->status())
        ->toBe(Response::HTTP_NOT_FOUND)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a successor entity', function () {
    $request = $this->connector->send(new SuccessorEntity('029200098C3K8BI2D551'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a managing lou', function () {
    $request = $this->connector->send(new ManagingLou('5493001KJTIIGC8Y1R12'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
