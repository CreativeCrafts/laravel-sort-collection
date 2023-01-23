<?php

namespace CreativeCrafts\SortCollection;

use Illuminate\Support\Collection;

class Sort
{
    public static function collection(Collection $collection, string $sortKey, ?string $sortDirection): Collection
    {
        $sortDirection = $sortDirection ?? self::getDefaultSortDirection();

        if ($sortDirection === 'asc') {
            return $collection->sortBy($sortKey);
        }

        return $collection->sortByDesc($sortKey);
    }

    public static function getDefaultSortDirection(): string
    {
        return config('sort-collection.sort_direction');
    }
}
