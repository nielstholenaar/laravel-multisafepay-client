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

            $environment = config('multisafepay-client.default_environment', 'production');

            if ($environment !== 'production' && $environment !== 'test') {
                $environment = 'production';
            }

            $client->environment($environment);

            $apiKey = config('multisafepay-client.environments.' . $environment . '.api_key', '');

            $client->setApiKey($apiKey);

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
        return ['ntholenaar.multisafepay-client'];
    }
}
