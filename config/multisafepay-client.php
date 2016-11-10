<?php

return [

    /**
     * Environments.
     *
     * MultiSafePay provides a TEST environment and a LIVE environment. The TEST environment is useful
     * for developing and testing a new integration with our API as no real transactions are able
     * to be processed. Once the integration has been developed processing real transactions is as simple as
     * addressing the LIVE API and updating the API Key being used.
     *
     */
    'environments' => [

        'test' => [
            'api_key' => '',
        ],

        'production' => [
            'api_key' => '',
        ],

    ],

    /**
     * Default environment.
     *
     * By default this environment will be used for all calls.
     */
    'default_environment' => 'test',

];
