<?php

use Illuminate\Support\Facades\Route;
use Spatie\Valuestore\Valuestore;

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

Route::post('/webhook/onboarding', function (Request $request) {
    $valuestore = Valuestore::make(config_path('counter.json'));
    $value = $valuestore->get('counter', 0);
    $value++;
    $valuestore->put('counter', $value);

    return $value;
});


