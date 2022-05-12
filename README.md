# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/icatala/logger.svg?style=flat-square)](https://packagist.org/packages/icatala/logger#1.0.0)
[![Total Downloads](https://img.shields.io/packagist/dt/icatala/logger.svg?style=flat-square)](https://packagist.org/packages/icatala/logger#1.0.0)

This package allows you to control and log models.
Helps developers to log model states.
Stores actions on models in the database to consult them in the future.
## Installation

You can install the package via composer:

```bash
composer require icatala/logger
```

The package will automatically register itself.

You can publish the migration with:

```bash
php artisan vendor:publish --provider="Icatala\Logger\LoggerServiceProvider" --tag="migrations"
```
Note: The default migration assumes you are using integers for your model IDs. If you are using UUIDs, or some other format, adjust the format of the subject_id and causer_id fields in the published migration before continuing.

After publishing the migration you can create the logs table by running the migrations:
```bash
php artisan migrate
```
## Usage

Import package in your controller:
```php
use Icatala/Logger/Logger;
```
Use Logger:
```php
Logger::create($model,$msg);
```
$model = Laravel model you are using.
$msg = Laravel model you are using.


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email catalagil.ismael@gmail.com instead of using the issue tracker.

## Credits

-   [Ismael Catala Gil](https://github.com/icatala)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
