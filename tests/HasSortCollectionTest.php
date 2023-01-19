<?php

  use CreativeCrafts\SortCollection\SortCollection;

  it('can sort a collection in ascending order', function () {
      $collection = collect([
          ['name' => 'John', 'age' => 30],
          ['name' => 'Jane', 'age' => 25],
          ['name' => 'Jack', 'age' => 40],
      ]);

      $sortedCollection = SortCollection::execute($collection, 'age', 'asc');

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

      $sortedCollection = SortCollection::execute($collection, 'age', 'desc');

      expect($sortedCollection->first())->toBe([
          'name' => 'Jack',
          'age' => 40,
      ]);
  });

  it('can sort a collection in descending order by default', function () {
      $collection = collect([
          ['name' => 'John', 'age' => 30],
          ['name' => 'Jane', 'age' => 25],
          ['name' => 'Jack', 'age' => 40],
      ]);

      $sortedCollection = SortCollection::execute($collection, 'age', SortCollection::defaultSortDirection());

      expect($sortedCollection->first())->toBe([
          'name' => 'Jack',
          'age' => 40,
      ]);
  });

  it('can get the default sort direction', function () {
      expect(SortCollection::defaultSortDirection())->toBe('desc');
  });
