# This is my package add-faq

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shefoo10/add-faq.svg?style=flat-square)](https://packagist.org/packages/shefoo10/add-faq)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/shefoo10/add-faq/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/shefoo10/add-faq/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/shefoo10/add-faq/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/shefoo10/add-faq/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shefoo10/add-faq.svg?style=flat-square)](https://packagist.org/packages/shefoo10/add-faq)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/add_FAQ.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/add_FAQ)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require shefoo10/add-faq
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="add-faq-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="add-faq-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="add-faq-views"
```

## Usage

```php
$addFAQ = new Aquadic\AddFAQ();
echo $addFAQ->echoPhrase('Hello, Aquadic!');
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

- [SHEFOO10](https://github.com/SHEFOO10)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
