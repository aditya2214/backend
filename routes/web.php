<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/adit',function(){
// 	return view('blog/nama');
// });

Route::get('/blog','control@index');

Route::get('/blog/create','control@create');
Route::post('/blog','control@store');


Route::get('/blog/{id}','control@show');



Route::get('/blog/{id}/edit','control@edit');
Route::put('/blog/{id}','control@update')->name('update_blog');

Route::delete('/blog/{id}','control@destroy')->name('delete_blog');


Route::get('/home', 'HomeController@index')->name('home');
