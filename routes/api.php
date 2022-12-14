<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/cart-items', function () {
    
    $data = [
        [
            'id' => 1,
            'title' => 'Item 1',
            'qty' => 1,
            'unitPrice' => 1000000,
            'totalPrice' => 1000000
        ],
        [
            'id' => 2,
            'title' => 'Item 2',
            'qty' => 2,
            'unitPrice' => 1000000,
            'totalPrice' => 2000000
        ],
    ];

    return response()->json([
        'status' => true,
        'data' => $data,
    ]);
});
