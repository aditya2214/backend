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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employess','EmployessController@index');
Route::post('/employess','EmployessController@store');
Route::put('/employess/{id}','EmployessController@update');
Route::delete('/employess/{id}','EmployessController@delete');

// Route::get('/test', function() {
// 	return 'hello world';
// });

// // Route::get('/home', 'Controller@index');
// // route::get('/hai',function(){
// // 	return 'Aditya Oktaviana';
// // });

// route::get('/home','Controller@hai');


