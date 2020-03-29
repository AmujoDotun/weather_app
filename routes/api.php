<?php

use Zttp\Zttp;
use Illuminate\Http\Request;

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

Route::get('/weather', function(){
    $response = Zttp::get('https://api.darksky.net/forecast/11257e7cdf9ba76e0adef0c016e6ab37/37.8267,-122.4233');

    return $response->json();
});
