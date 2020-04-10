<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AllController@show');

Route::get('admin', function(){
    return view('layout.admin');
});

// 
Route::get('/aboutedit', 'AboutController@show')->name('about');
// About -> edit

Route::get('/aboutedit/{id}/edit', 'AboutController@edit');
Route::post('/aboutedit/{id}/update', 'AboutController@update');

// Create
Route::get('/aboutedit/create', 'AboutController@create');
Route::post('/aboutedit/store', 'AboutController@store');

// delete
Route::get('/aboutedit/{id}/destroy', 'AboutController@destroy');


