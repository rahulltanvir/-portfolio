<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.home.index');
})->name('home');

Route::get('/vercel-test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Laravel is running on Vercel',
        'php' => PHP_VERSION,
        'laravel' => app()->version(),
        'environment' => app()->environment(),
    ]);
});