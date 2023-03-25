<?php

use K2ouMais\Gleif\GleifApi;
use Symfony\Component\HttpFoundation\Response;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\DirectChildren;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\UltimateChildren;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\DirectChildRelationships;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\UltimateChildRelationships;

beforeEach(function () {
    $this->connector = new GleifApi();
});

/**
 * Direct Children
 */
it('can request a direct child relationships', function (string $id) {
    $request = $this->connector->send(new DirectChildRelationships($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
})->with('direct-child-relationships');

it('can request the direct children', function (string $id) {
    $request = $this->connector->send(new DirectChildren($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
})->with('direct-children');

/**
 * Ultimate Children
 */
it('can request an ultimate child relationships', function (string $id) {
    $request = $this->connector->send(new UltimateChildRelationships($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
})->with('ultimate-child-relationships');

it('can request the ultimate children', function (string $id) {
    $request = $this->connector->send(new UltimateChildren($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK)
        ->and($request->body())
        ->toBeJson('It is not a Json body');
})->with('ultimate-children');
