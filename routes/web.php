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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'PacientController@index');

//Route::get('datatables/data', 'TaulaController@anyData');
//Route::get('datatables', 'TaulaController@getIndex');


//Route::resource('datatables/', 'TaulaController', [
//    'anyData'  => 'datatables/data',
//    'index' => 'datatables',
//]);

//Route::get('/', 'PacientController@index');
//Route::get('pacients', 'PacientController@index')->name('pacients');
//Route::post('pacients/store', 'PacientController@store')->name('pacients.store');
//Route::get('pacients/create', 'PacientController@create')->name('pacients.create');
//Route::delete('pacients/destroy', 'PacientController@destroy')->name('pacients.destroy');
//Route::patch('pacients/{id}', 'PacientController@update');
//Route::put('pacients/{id}', 'PacientController@update')->name('pacients.update');
//Route::get('pacients/{id}/edit', 'PacientController@edit')->name('pacients.edit');

Route::get('/', 'HomeController@index');
Route::resource('/pacients','PacientController');

Route::get('datatables/pacients', 'DatatablesController@pacients')->name('datatables.pacients');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
