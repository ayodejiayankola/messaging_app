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

Route::get('/' ,function(){
    return view('welcome');
});
Route::post('/create' , 'MessageController@create');
Route::get('/message/{id}' , 'MessageController@view');
Auth::routes();

Route::get('/profiles/{profile}', 'ProfilesController@index')->name('profile.show');
