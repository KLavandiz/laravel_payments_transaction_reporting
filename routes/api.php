<?php


use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Client\ClientController;
use App\Http\Controllers\Api\V1\Transaction\TransactionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:passport')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v3', 'namespace' => 'App\Http\Controllers\Api\V3'], function () {

    Route::middleware('auth:api')->group(function () {

        Route::group(["prefix" => "transactions"], function () {

            Route::post('report', [TransactionsController::class, 'report'])->name('transactions_report');
            Route::post('list', [TransactionsController::class, 'list'])->name('transactions_list');
            Route::post('/', [TransactionsController::class, 'transaction'])->name('transactions_list');

        });

        Route::group(["prefix" => "client"], function () {

            Route::post('/', [ClientController::class, 'getClient'])->name('get_client');


        });

    });

    Route::group(["prefix" => "merchant"], function () {

        Route::post('user/login', [AuthController::class, 'login'])->name('login');

    });


});

