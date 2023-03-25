<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiIssuers\AllLeiIssuers;
use K2ouMais\Gleif\Requests\LeiIssuers\LeiIssuerById;
use K2ouMais\Gleif\Requests\LeiIssuers\LeiIssuerJurisdictionById;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all lei issuers', function () {
    $request = $this->connector->send(new AllLeiIssuers(5));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request lei issuer by id', function () {
    $request = $this->connector->send(new LeiIssuerById('259400L3KBYEVNHEJF55'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request lei issuer jurisdiction by id', function () {
    $request = $this->connector->send(new LeiIssuerJurisdictionById('259400L3KBYEVNHEJF55'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
