<?php

namespace CreativeCrafts\SortCollection;

use CreativeCrafts\SortCollection\Contracts\SortContract;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

class Sort implements SortContract
{
    /**
     * Sort a collection by a specified key and direction.
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param  Collection<TKey, TValue>  $collection  The collection to sort
     * @param  string  $sortKey  The key to sort the collection by
     * @param  string|null  $sortDirection  The direction to sort (asc or desc), defaults to config value if null
     * @return Collection<TKey, TValue> The sorted collection
     */
    public static function collection(Collection $collection, string $sortKey, ?string $sortDirection): Collection
    {
        $sortDirection = $sortDirection ?? self::getDefaultSortDirection();

        if ($sortDirection === 'asc') {
            return $collection->sortBy($sortKey);
        }

        return $collection->sortByDesc($sortKey);
    }

    /**
     * Get the default sort direction from configuration.
     *
     * This method retrieves the default sort direction value from the application's
     * configuration file.
     *
     * @return string The default sort direction ('asc' or 'desc')
     */
    public static function getDefaultSortDirection(): string
    {
        return Config::string(key: 'sort-collection.sort_direction', default: 'desc');
    }

    /**
     * Sort query results with encrypted columns
     *
     * @param  Builder  $query  The query builder instance
     * @param  string  $encryptedColumn  The encrypted column to sort by
     * @param  string|null  $sortDirection  The direction to sort (asc/desc)
     * @return Collection<int, Model> The sorted collection
     */
    public static function encryptedColumn(Builder $query, string $encryptedColumn, ?string $sortDirection = null): Collection
    {
        $results = $query->get();

        return self::collection($results, $encryptedColumn, $sortDirection);
    }

    /**
     * Sort a collection by multiple columns, including encrypted ones
     *
     * @template TKey of array-key
     * @template TValue
     *
     * @param  Collection<TKey, TValue>  $collection  The collection to sort
     * @param  array<string, string|null>  $sortColumns  Array of columns with their sort directions ['column' => 'direction']
     * @return Collection<TKey, TValue> The sorted collection
     */
    public static function multipleColumns(Collection $collection, array $sortColumns): Collection
    {
        $result = $collection;
        foreach (array_reverse($sortColumns) as $column => $direction) {
            $direction = $direction ?? self::getDefaultSortDirection();

            if ($direction === 'asc') {
                $result = $result->sortBy($column);
            } else {
                $result = $result->sortByDesc($column);
            }
        }

        return $result;
    }
}
