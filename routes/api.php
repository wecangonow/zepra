<?php

use Illuminate\Http\Request;
use App\Lesson;
use App\User;

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


Route::get('home_page_info', 'HomeController@index');


Route::get('users', 'UserController@index');

Route::get('users/{id}', 'UserController@show');
