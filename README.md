# Healthy

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfneal/healthy.svg?style=flat-square)](https://packagist.org/packages/sfneal/healthy)
[![Build Status](https://img.shields.io/travis/sfneal/healthy/master.svg?style=flat-square)](https://travis-ci.org/sfneal/healthy)
[![Quality Score](https://img.shields.io/scrutinizer/g/sfneal/healthy.svg?style=flat-square)](https://scrutinizer-ci.com/g/sfneal/healthy)
[![Total Downloads](https://img.shields.io/packagist/dt/sfneal/healthy.svg?style=flat-square)](https://packagist.org/packages/sfneal/healthy)

Provides health check routes to Laravel applications for determining if the app is "up & running".

## Installation

You can install the package via composer:

```bash
composer require sfneal/healthy
```

## Usage

Determine your Laravel Application is up & running by sending a ping or get request to the '/health' uri.  Useful for load balanced deployments with periodic uptime checks.

To change the route or uri used publish the config file. 
``` php
php artisan vendor:publish --provider="Sfneal\Healthy\Providers\HealthServiceProvider"
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

If you discover any security related issues, please email stephen.neal14@gmail.com instead of using the issue tracker.

## Credits

- [Stephen Neal](https://github.com/sfneal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
