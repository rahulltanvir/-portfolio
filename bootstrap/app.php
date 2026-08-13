<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })
    ->create();

/*
|--------------------------------------------------------------------------
| Vercel writable storage
|--------------------------------------------------------------------------
*/

if (getenv('VERCEL') || getenv('VERCEL_ENV')) {

    $storage = '/tmp/laravel';

    $directories = [
        $storage,
        $storage . '/framework',
        $storage . '/framework/views',
        $storage . '/framework/cache',
        $storage . '/framework/sessions',
        $storage . '/framework/testing',
        $storage . '/logs',
    ];

    foreach ($directories as $directory) {
        if (! is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
    }

    $app->useStoragePath($storage);
}

return $app;