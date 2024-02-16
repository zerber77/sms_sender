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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//Route::group(['namespace'=>'API', 'prefix' => 'api'], function () {
    Route::group(['namespace'=>'API\Users', 'prefix' => 'users'], function () {
        Route::get('/','IndexController');
        Route::post('/store','StoreController');
        Route::get('/{user}','SendController');
        Route::get('/del/{user}','DeleteController');

    });
//});
Route::group(['namespace'=>'API\Sms', 'prefix' => 'sms'], function () {
    Route::get('/','IndexController');
    Route::get('/del/{sms}','DeleteController');
    //Route::get('/{user}','SendController');
});
