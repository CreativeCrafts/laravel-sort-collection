# A simple package to sort query collections.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creativecrafts/laravel-sort-collection.svg?style=flat-square)](https://packagist.org/packages/creativecrafts/laravel-sort-collection)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/creativecrafts/laravel-sort-collection/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/creativecrafts/laravel-sort-collection/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/creativecrafts/laravel-sort-collection/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/creativecrafts/laravel-sort-collection/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/creativecrafts/laravel-sort-collection.svg?style=flat-square)](https://packagist.org/packages/creativecrafts/laravel-sort-collection)

A simple handy package to sort query collections.

## Installation

You can install the package via composer:

```bash
composer require creativecrafts/laravel-sort-collection
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="sort-collection-config"
```

This is the contents of the published config file:

```php
return [
  /**
     * The default sort direction to use when sorting a collection.
     * supported: asc, desc
     */
    'sort_direction' => 'desc',
];
```

Optionally, you can publish the views using

## Usage

```php
use CreativeCrafts\SortCollection\SortCollection;

$collection = collect([
     ['name' => 'John', 'age' => 30],
     ['name' => 'Jane', 'age' => 25],
     ['name' => 'Jack', 'age' => 40],
]);
$sortedCollection = SortCollection::execute($collection, 'age', 'desc');

$query = User::query()
            ->select('name', 'age')
            ->get();

$result = SortCollection::execute($collection, 'age', 'asc');
```

```php
You can also retrieve the default sort direction from the config file.
use CreativeCrafts\SortCollection\SortCollection;
SortCollection::defaultSortDirection()
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Godspower Oduose](https://github.com/rockblings)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
