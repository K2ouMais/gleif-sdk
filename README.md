# GLEIF-SDK

GLEIF-SDK made with Saloon v2.

## Installation

You can install the package via composer:

```bash
composer require k2oumais/gleif-sdk
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="gleif-sdk-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$gleif = new K2ouMais\Gleif();
echo $gleif->echoPhrase('Hello, K2ouMais!');
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

- [João Alves](https://github.com/K2ouMais)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
