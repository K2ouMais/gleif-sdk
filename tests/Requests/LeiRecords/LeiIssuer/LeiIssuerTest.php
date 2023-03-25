<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiRecords\LeiIssuer\LeiIssuer;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request a lei issuer (ManagingLOU)', function () {
    $request = $this->connector->send(new LeiIssuer('5299000J2N45DDNE4Y28'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});
