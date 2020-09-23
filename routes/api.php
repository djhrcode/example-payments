<?php

use App\Services\PaymentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('hello')

// Route::get('/pay', 'PaymentController@pay');
// Route::post('/pay', 'PaymentController@pay');

Route::post('/old', function (Request $request) {
    return response()->json($request->json());
});


Route::post('/payment/{method?}', function (Request $request, PaymentService $payments) {



    return response()->json($payments->getPlatformName());
});

