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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'PpdbController@home')->name('home');

Route::get('/print', 'PrintController@print')->name('print');

Route::prefix('/')->middleware(['auth'])->group(function () {

    Route::get('/index', 'PpdbController@index')->name('ppdb.index');
    Route::post('/store', 'PpdbController@store')->name('ppdb.store');
    Route::get('/edit/{id}', 'PpdbController@edit')->name('ppdb.edit');
    Route::patch('/update/{id}', 'PpdbController@update')->name('ppdb.update');
    Route::get('/show/{nis}', 'PpdbController@show')->name('ppdb.show');
    Route::delete('/delete/{id}', 'PpdbController@destroy')->name('ppdb.delete');
  
});