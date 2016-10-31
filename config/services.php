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
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => 'AKIAIPRRC6HXGQVH6H4Q',
        'secret' => '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',
        'region' => 'us-west-2',
    ],

    'stripe' => [
        'model'  => Admin\Models\User::class,
        'key' => '',
        'secret' => '',
    ],

];
