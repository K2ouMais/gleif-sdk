<?php

/**
 * Direct Parent
 */

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\DirectChildRelationships;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\DirectChildren;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\UltimateChildRelationships;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Children\UltimateChildren;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

/**
 * Direct Children
 */
it('can request a direct child relationships', function (string $id) {
    $request = $this->connector->send(new DirectChildRelationships($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('direct-child-relationships');

it('can request the direct children', function (string $id) {
    $request = $this->connector->send(new DirectChildren($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('direct-children');

/**
 * Ultimate Children
 */
it('can request an ultimate child relationships', function (string $id) {
    $request = $this->connector->send(new UltimateChildRelationships($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('ultimate-child-relationships');

it('can request the ultimate children', function (string $id) {
    $request = $this->connector->send(new UltimateChildren($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('ultimate-children');
