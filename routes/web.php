<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-event', function () {
    trigger_event('app.booted');
    return 'Triggered app.booted event';
});

Route::get('/test-filter', function () {
    $value = 'Original value. ';
    $filtered = apply_filters('test.filter', $value);
    return $filtered;
});
