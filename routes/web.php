<?php

use Illuminate\Http\Request;
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

Route::post('/webhook/counter', function (Request $request) {
    $lnurlw = $request->input('lnurlw');
    $valuestore = Valuestore::make(config_path('counter.json'));
    $value = $valuestore->get($lnurlw, 0);
    $value++;
    $valuestore->put($lnurlw, $value);

    return $value;
});


