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
Route::post('/login','Api\AuthController@login');
Route::post('/register','Api\AuthController@register');
Route::get('/logout','Api\AuthController@logout');
Route::post('/etatwilya','Api\InfoController@EnvoyerEtat');
Route::post('/decisions','Api\InfoController@EnvoyerDecisions');
Route::post('/etatdecisions','Api\InfoController@EnvoyerEtatAvecDecisions');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
