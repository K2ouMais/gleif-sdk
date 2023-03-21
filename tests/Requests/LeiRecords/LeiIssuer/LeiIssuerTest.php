<?php

use K2ouMais\Gleif\GleifApi;
use Symfony\Component\HttpFoundation\Response;
use K2ouMais\Gleif\Requests\LeiRecords\LeiIssuer\LeiIssuer;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request a lei issuer (ManagingLOU)', function () {
    $request = $this->connector->send(new LeiIssuer('5299000J2N45DDNE4Y28'));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
});