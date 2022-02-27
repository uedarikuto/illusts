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

Route::get('/', 'IllustController@top');
Route::get('/illusts/create', function() {
    return view('illusts/create');
});
Route::get('/illusts/{illust}', 'IllustController@show');
Route::get('/illusts/{illust}/edit', 'IllustController@edit');
Route::get('/illusts/profile', 'IllustController@profile');

Route::delete('/illusts/{illust}', 'IllustController@delete');

Route::put('/illusts/{illust}', 'IllustController@update');

Route::post('/illusts', 'IllustController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
