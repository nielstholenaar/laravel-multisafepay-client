# Laravel bridge package for the MultiSafepay Client.

## Requirements

The following versions of PHP are supported.

* PHP 5.6
* PHP 7.0

## Installation

You can use `composer require` to add the client to your `composer.json` file.

```
$ composer require ntholenaar/laravel-multisafepay-client
```

Add the service provider to the service providers array within the `config/app.php` file.

```
\Ntholenaar\LaravelMultiSafepayClient\Providers\MultiSafepayClientServiceProvider::class,
```

Add the Facade to the alias array within the `config/app.php` file.

```
'MultiSafepayClient' => Ntholenaar\LaravelMultiSafepayClient\Facades\MultiSafepayClient::class,
```

Publish the package configuration

```
$ php artisan vendor:publish
```

## Usage

For information about how to use this package see the main repository: https://github.com/nielstholenaar/multisafepay-client.

## Credits

- [Niels Tholenaar](https://github.com/nielstholenaar)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
