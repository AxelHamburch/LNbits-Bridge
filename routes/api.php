<?php

use App\Bitcoin\WalletAPIInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Valuestore\Valuestore;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route heißt /api/counter
Route::get('/counter/{campaign}', function ($campaign) {
    $valuestore = Valuestore::make(config_path('counter.json'));
    $value = $valuestore->get($campaign, 0);

    return [
        'counter' => $value,
    ];
});

// Route heißt /api/balance
Route::get('/balance', function (WalletAPIInterface $walletAPI) {
    return $walletAPI->checkConnection();
});
