# A filament package to log and notify authentication

[![Latest Version on Packagist](https://img.shields.io/packagist/v/akira/filament-auth-logs.svg?style=flat-square)](https://packagist.org/packages/akira/filament-auth-logs)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/akira/filament-auth-logs/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/akira/filament-auth-logs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/akira/filament-auth-logs/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/akira/filament-auth-logs/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/akira/filament-auth-logs.svg?style=flat-square)](https://packagist.org/packages/akira/filament-auth-logs)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require akira/filament-auth-logs
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-auth-logs-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-auth-logs-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-auth-logs-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentAuthLogs = new Akira\FilamentAuthLogs();
echo $filamentAuthLogs->echoPhrase('Hello, Akira!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [kidiatoliny](https://github.com/kidiatoliny)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
