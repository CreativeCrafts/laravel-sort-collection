<?php

namespace CreativeCrafts\SortCollection;

use Illuminate\Support\Collection;

class SortCollection
{
    public static function execute(Collection $collection, string $sortKey, string $sortDirection): Collection
    {
        if ($sortDirection === 'asc') {
            return $collection->sortBy($sortKey);
        }

        return $collection->sortByDesc($sortKey);
    }

    public static function defaultSortDirection(): string
    {
        return config('sort-collection.sort_direction');
    }
}
