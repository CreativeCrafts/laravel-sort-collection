# Changelog

All notable changes to `laravel-sort-collection` will be documented in this file.

## 0.0.1 - 2023-01-19

- initial release

## 0.1.1 - 2023-01-19

- Make sort direction optional. it can use the default sort direction set in the config if not provided.
- Updated README.md to show how to use the default sort direction with examples.
- Updated pest tests to test the default sort direction.

## 1.1.1 - 2023-01-19

- Rename `SortCollection` classs to `Sort`.
- Rename `Sort` class method `execute` to `collection` and `defaultSortDirection` to `getDefaultSortDirection`.
- Updated Readme.md to reflect the changes.
- Updated pest tests to reflect the changes.

## 1.1.2 - 2023-02-16

- Updated dependencies.

## 1.1.3 - 2023-02-21

- Support laravel 10

## 1.2.0 - 2024-03-18

- Added support for Laravel 11
- Removed support for Laravel 9
- php8.2 is the minimum required php version
