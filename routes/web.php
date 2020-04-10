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

//  Section ABOUT
Route::get('/aboutedit', 'AboutController@show')->name('about');
// Create
Route::get('/aboutedit/create', 'AboutController@create');
Route::post('/aboutedit/store', 'AboutController@store');
// Edit
Route::get('/aboutedit/{id}/edit', 'AboutController@edit');
Route::post('/aboutedit/{id}/update', 'AboutController@update');
// Delete
Route::get('/aboutedit/{id}/destroy', 'AboutController@destroy');

// *****************************************

// Section Services
Route::get('/servicesedit', 'ServicesController@show')->name('services');
// Create
Route::get('/servicesedit/create', 'ServicesController@create');
Route::post('/servicesedit/store', 'ServicesController@store');
// Services -> Edit
Route::get('/servicesedit/{id}/edit', 'ServicesController@edit');
Route::post('/servicesedit/{id}/update', 'ServicesController@update');
// Delete
Route::get('/servicesedit/{id}/destroy', 'ServicesController@destroy');

// ******************************************

// Section Subscribe
Route::get('/subscribeedit', 'SubscribeController@show')->name('subscribe');
//  Subscribe -> Edit
Route::get('/subscribeedit/{id}/edit', 'SubscribeController@edit');
Route::post('/subscribeedit/{id}/update', 'SubscribeController@update');

// ********************************************

// Section Portoflio
Route::get('/portofolioedit', 'PortofolioController@show')->name('portofolios');
// Portofolio Edit
Route::get('/portofolioedit/{id}/edit', 'PortofolioController@edit');
Route::post('/portofolioedit/{id}/update', 'PortofolioController@update');
// PortoFolio Create
Route::get('/portofolioedit/create', 'PortofolioController@create');
Route::post('/portofolioedit/store', 'PortofolioController@store');
// Delete 
Route::get('/portofolioedit/{id}/destroy','PortofolioController@destroy');