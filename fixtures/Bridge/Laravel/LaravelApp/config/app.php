<?php

return [
    'env' => 'test',
    'debug' => true,
    'url' => 'http://localhost',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'dummy',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'providers' => [
        \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        \Illuminate\Database\DatabaseServiceProvider::class,
        \Illuminate\Filesystem\FilesystemServiceProvider::class,
        \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        \Illuminate\Foundation\Providers\ArtisanServiceProvider::class,

        \Fidry\SfPotLille\Bridge\Laravel\FidrySfPotLilleDemoProvider::class,
    ],
    'aliases' => [],
];
