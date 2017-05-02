# Flowder JSON Loader [![Latest Stable Version](https://poser.pugx.org/imjoehaines/flowder-json-loader/v/stable)](https://packagist.org/packages/imjoehaines/flowder-json-loader) [![Build Status](https://travis-ci.org/imjoehaines/flowder-json-loader.svg?branch=master)](https://travis-ci.org/imjoehaines/flowder-json-loader) [![codecov](https://codecov.io/gh/imjoehaines/flowder-json-loader/branch/master/graph/badge.svg)](https://codecov.io/gh/imjoehaines/flowder-json-loader)

A JSON file loader for [Flowder](https://github.com/imjoehaines/flowder)

## Usage

1. Install Flowder JSON Loader as a development dependency through [Composer](https://getcomposer.org/)

   ```sh
   $ composer install imjoehaines/flowder-json-loader --dev
   ```

2. Pass an instance of `Imjoehaines\FlowderJson\JsonLoader` to Flowder, as detailed in the [Flowder readme](https://github.com/imjoehaines/flowder/blob/master/README.md#usage)

3. Pass the path to a JSON file to `Flowder::loadFixtures`, your JSON file should contain an array of objects where each object represents a database row. For example

```json
[
    {
        "column_1": "value 1",
        "column_2": 2,
        "column_3": "three"
    },
    {
        "column_1": "value 4",
        "column_2": 5,
        "column_3": "six"
    }
]
```
