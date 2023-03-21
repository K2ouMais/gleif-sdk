<?php

use K2ouMais\Gleif\GleifApi;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Parents\DirectParentLeiRecord;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Parents\DirectParentRelationships;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Parents\DirectParentReportingExceptions;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Parents\UltimateParentLeiRecord;
use K2ouMais\Gleif\Requests\LeiRecords\Lvl2RelationshipInformation\Parents\UltimateParentReportingExceptions;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->connector = new GleifApi();
});

/**
 * Direct Parent
 */
it('can request a direct parent lei record', function (string $id) {
    $request = $this->connector->send(new DirectParentLeiRecord($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('direct-parent-lei-records');

it('can request the direct parent relationships', function (string $id) {
    $request = $this->connector->send(new DirectParentRelationships($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('direct-parent-lei-records');

it('can request the direct parent reporting exceptions', function (string $id) {
    $request = $this->connector->send(new DirectParentReportingExceptions($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('direct-parent-exceptions');

/**
 * Ultimate Parent
 */
it('can request an ultimate parent lei record', function (string $id) {
    $request = $this->connector->send(new UltimateParentLeiRecord($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('ultimate-parent-lei-records');

it('can request the ultimate parent relationships', function (string $id) {
    $request = $this->connector->send(new UltimateParentLeiRecord($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('ultimate-parent-lei-records');

it('can request the ultimate parent reporting exceptions', function (string $id) {
    $request = $this->connector->send(new UltimateParentReportingExceptions($id));

    expect($request->status())
        ->toBe(Response::HTTP_OK);
})->with('ultimate-parent-exceptions');
