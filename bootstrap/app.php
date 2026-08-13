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

if (isset($_SERVER['VERCEL'])) {
    $tmp = '/tmp/laravel';

    if (! is_dir($tmp)) {
        mkdir($tmp, 0777, true);
    }

    if (! is_dir($tmp.'/views')) {
        mkdir($tmp.'/views', 0777, true);
    }

    if (! is_dir($tmp.'/cache')) {
        mkdir($tmp.'/cache', 0777, true);
    }

    if (! is_dir($tmp.'/sessions')) {
        mkdir($tmp.'/sessions', 0777, true);
    }

    $app->useStoragePath($tmp);
}

return $app;