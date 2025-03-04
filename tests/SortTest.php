<?php

use CreativeCrafts\SortCollection\Sort;

it('can sort a collection in ascending order', function () {
    $collection = collect([
        ['name' => 'John', 'age' => 30],
        ['name' => 'Jane', 'age' => 25],
        ['name' => 'Jack', 'age' => 40],
    ]);

    $sortedCollection = Sort::collection($collection, 'age', 'asc');

    expect($sortedCollection->first())->toBe([
        'name' => 'Jane',
        'age' => 25,
    ]);
});

it('can sort a collection in descending order', function () {
    $collection = collect([
        ['name' => 'John', 'age' => 30],
        ['name' => 'Jane', 'age' => 25],
        ['name' => 'Jack', 'age' => 40],
    ]);

    $sortedCollection = Sort::collection($collection, 'age', 'desc');

    expect($sortedCollection->first())->toBe([
        'name' => 'Jack',
        'age' => 40,
    ]);
});

it('can sort a collection by using the default sort direction set in the config', function () {
    $collection = collect([
        ['name' => 'John', 'age' => 30],
        ['name' => 'Jane', 'age' => 25],
        ['name' => 'Jack', 'age' => 40],
    ]);

    $sortedCollection = Sort::collection($collection, 'age', null);

    expect($sortedCollection->first())->toBe([
        'name' => 'Jack',
        'age' => 40,
    ]);
});

it('can get the default sort direction', function () {
    expect(Sort::getDefaultSortDirection())->toBe('desc');
});
