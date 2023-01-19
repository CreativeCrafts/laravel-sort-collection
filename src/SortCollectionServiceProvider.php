<?php

namespace CreativeCrafts\SortCollection;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CreativeCrafts\SortCollection\Commands\SortCollectionCommand;

class SortCollectionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-sort-collection')
            ->hasConfigFile();
    }
}
