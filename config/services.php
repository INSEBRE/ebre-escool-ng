<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => env('SOCIALITE_GITHUB_ID'),
        'client_secret' => env('SOCIALITE_GITHUB_SECRET'),
        'redirect' => env('SOCIALITE_GITHUB_URL'),
    ],

    'facebook' => [
        'client_id' => env('SOCIALITE_FACEBOOK_ID'),
        'client_secret' => env('SOCIALITE_FACEBOOK_SECRET'),
        'redirect' => env('SOCIALITE_FACEBOOK_URL'),
    ],

    'twitter' => [
        'client_id' => env('SOCIALITE_TWITTER_ID'),
        'client_secret' => env('SOCIALITE_TWITTER_SECRET'),
        'redirect' => env('SOCIALITE_TWITTER_URL'),
    ],

    'google' => [
        'client_id' => env('SOCIALITE_GOOGLE_ID'),
        'client_secret' => env('SOCIALITE_GOOGLE_SECRET'),
        'redirect' => env('SOCIALITE_GOOGLE_URL'),
    ]

    /*
    | Acacha Llum services...
    |
    | See: https://github.com/acacha/llum
    |
    */
    #llum_services

];
