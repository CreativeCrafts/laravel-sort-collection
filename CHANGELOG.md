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