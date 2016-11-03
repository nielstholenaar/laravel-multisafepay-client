<?php namespace Ntholenaar\LaravelMultiSafepayClient\Facades;

use Illuminate\Support\Facades\Facade;

class MultiSafepayClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ntholenaar.multisafepay-client';
    }
}
