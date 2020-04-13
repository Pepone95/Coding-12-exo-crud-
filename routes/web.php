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

// *******************************************

// Section Testimonials

Route::get('/testimonialedit', 'TestimonialController@show')->name('testimonials');

// Testimonials -> Edit
Route::get('/testimonialedit/{id}/edit', 'TestimonialController@edit');
Route::post('/testimonialedit/{id}/update', 'TestimonialController@update');

// Testimonials -> Create
Route::get('/testimonialedit/create', 'TestimonialController@create');
Route::post('/testimonialedit/store', 'TestimonialController@store');

// Testimonials -> Delete
Route::get('/testimonialedit/{id}/destroy', 'TestimonialController@destroy');

// ***************************************************

// Section Team
Route::get('/teamedit', 'TeamController@show')->name('teams');

// Team Create
Route::get('/teamedit/create', 'TeamController@create');
Route::post('/teamedit/store', 'TeamController@store');

// Team -> Edit
Route::get('/teamedit/{id}/edit', 'TeamController@edit');
Route::post('/teamedit/{id}/update', 'TeamController@update');

//  Team -> Delete
Route::get('/teamedit/{id}/destroy', 'TeamController@destroy');

// ********************************************************

// Section Contact

Route::get('/contactedit', 'ContactController@show')->name('contacts');

// Contact -> Create
Route::get('/contactedit/create', 'ContactController@create');
Route::post('/contactedit/store', 'ContactController@store');


// Contact -> Edit
Route::get('/contactedit/{id}/edit', 'ContactController@edit');
Route::post('/contactedit/{id}/update', 'ContactController@update');

// Contact -> Delete 
 
Route::get('/contactedit/{id}/destroy', 'ContactController@destroy');



