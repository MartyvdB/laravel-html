# Painless html generation

This package extends from [laravel-html](https://github.com/spatie/laravel-html)

### Documentation

You'll find the full documentation for laravel-html [here](https://docs.spatie.be/laravel-html).

## Installation

You can install the package via composer:

``` bash
composer require martyb/laravel-html
```

Next, you must install the service provider:

```php
// config/app.php
'providers' => [
    ...
    Martyb\Html\HtmlServiceProvider::class,
];
```

And optionally register an alias for the facade.

```php
// config/app.php
'aliases' => [
    ...
    'Html' => Martyb\Html\Facades\Html::class,
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

#### The people from Spatie
- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [Freek Van der Herten](https://github.com/freekmurze)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
