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
Route::get('/services', 'ServicesController@index');
Route::get('/services/create','ServicesController@create');
Route::post('/services','ServicesController@store');
Route::get('/viewservices', 'ServicesController@view');
Route::get('/progresservices', 'ServicesController@lihatprogres');
Route::get('/dashboard', 'ServicesController@lihatdashboard');
Route::get('/viewservices/{id}/edit','ServicesController@edit');
Route::put('/viewservices/{id}','ServicesController@update');
Route::delete('/viewservices/{id}','ServicesController@destroy');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
