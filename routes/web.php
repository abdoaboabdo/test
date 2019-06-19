<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','page@index');
//Route::get('/name', 'page@index');
Route::get('/about','page@about') ;
Route::get('/prolanguage','page@prolanguage');

Route::get('/name/{name}/{id}', function ($name,$id) {
    return 'my name is '.$name. ' and id is '.$id;
});
