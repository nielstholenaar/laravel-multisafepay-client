# Laravel bridge package for the MutliSafepay Client.

## Requirements

The following versions of PHP are supported.

* PHP 5.6
* PHP 7.0

## Installation

You can use `composer require` to add the client to your `composer.json` file.

```
$ composer require ntholenaar/laravel-multisafepay-client
```

Add the service provider to the service provider array within `config/app.php`.

```
\Ntholenaar\LaravelMultiSafepayClient\Providers\MultiSafepayClientServiceProvider::class,
```

Publish the package configuration

```
$ php artisan vendor:publish
```

## Credits

- [Niels Tholenaar](https://github.com/nielstholenaar)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
