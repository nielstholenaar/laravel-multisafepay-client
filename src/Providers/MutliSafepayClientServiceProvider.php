<?php namespace Ntholenaar\LaravelMultiSafepayClient\Providers;

use Illuminate\Support\ServiceProvider;
use Ntholenaar\MultiSafepayClient\Client;

class MultiSafepayClientServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../../config/multisafepay-client.php' => config_path('multisafepay-client.php'),
            ]
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ntholenaar.multisafepay-client', function ($app) {
            $client = new Client();
            $client->setApiKey($app['config']['multisafepay-client.api_key']);
            return $client;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['nielstholenaar.multisafepay-client'];
    }
}
