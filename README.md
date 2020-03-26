# A Laravel wrapper for the Shopify API.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rothrauff-consulting/laravel-shopify.svg?style=flat-square)](https://packagist.org/packages/rothrauff-consulting/laravel-shopify)
[![Build Status](https://img.shields.io/travis/rothrauff-consulting/laravel-shopify/master.svg?style=flat-square)](https://travis-ci.org/rothrauff-consulting/laravel-shopify)
[![Quality Score](https://img.shields.io/scrutinizer/g/rothrauff-consulting/laravel-shopify.svg?style=flat-square)](https://scrutinizer-ci.com/g/rothrauff-consulting/laravel-shopify)
[![Total Downloads](https://img.shields.io/packagist/dt/rothrauff-consulting/laravel-shopify.svg?style=flat-square)](https://packagist.org/packages/rothrauff-consulting/laravel-shopify)

Currently supports versions 2019-10 and 2020-01 of the api, and will support all released versions.

## Installation

You can install the package via composer:

```bash
composer require rothrauff-consulting/laravel-shopify
```

## Usage

Setup the environmental variables:

``` bash
SHOPIFY_SHOP=
SHOPIFY_APP_API_KEY=
SHOPIFY_APP_PASSWORD=
```
Optionally:

``` bash
SHOPIFY_API_VERSION=
```

``` php
Use Shopify;

Shopify::get('products');
Shopify::get('products', ['fields' => 'id,title']);

Shopify::post('products', [
    'product' => [
        //new product
    ]
]);

Shopify::put('products/{id}', [
    'product' => [
        //update product
    ]
]);

Shopify::delete('products/{id}');
```

Some delete requests require parameters, e.g., themes:

``` php
Shopify::delete('themes/{theme_id}/assets', ['asset[key]' =>  'asset_key']);
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email developers@rothrauffconsulting.com instead of using the issue tracker.

## Credits

- [Matthew Myers](https://github.com/mxm1070)
- [Developers](https://github.com/rothrauff-consulting)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
