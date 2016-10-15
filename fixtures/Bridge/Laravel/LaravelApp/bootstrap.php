<?php

use Fidry\SfPotLille\Bridge\Laravel\LaravelApp\Application;

$app = new Application(realpath(__DIR__));

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    \Fidry\SfPotLille\Bridge\Laravel\LaravelApp\ConsoleKernel::class
);
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Illuminate\Foundation\Exceptions\Handler::class
);

return $app;
