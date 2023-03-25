<?php

use K2ouMais\Gleif\GleifApi;
use Symfony\Component\HttpFoundation\Response;
use K2ouMais\Gleif\Requests\RegistrationAgents\AllRegistrationAgents;
use K2ouMais\Gleif\Requests\RegistrationAgents\RegistrationAgentById;

beforeEach(function () {
    $this->connector = new GleifApi();
});

it('can request all registration agents', function () {
    $request = $this->connector->send(new AllRegistrationAgents());

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a registration agent with leiIssuer', function () {
    $request = $this->connector->send(new AllRegistrationAgents(leiIssuer: '5299000J2N45DDNE4Y28'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a registration agents with lei', function () {
    $request = $this->connector->send(new AllRegistrationAgents(lei: '5299000OVRLMF858L016'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});

it('can request a registration agent by id', function () {
    $request = $this->connector->send(new RegistrationAgentById('5d10d4de691522.63705283'));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
});