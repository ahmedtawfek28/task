<?php

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
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('me', 'UserController@getAuthenticatedUser');
});
Route::group(['prefix' => 'v1'], function () {
Route::get('department','DataController@department');
Route::get('managers','DataController@Managers');
Route::get('manager/{id}','DataController@Manager');
});
Route::group(['prefix' => 'v2'], function () {
    Route::get('department','DataController@department');
    Route::get('managers','DataController@Managers');
    Route::get('manager/{id}','DataController@Manager');
});