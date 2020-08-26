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


    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/', 'ArticalController@index' );
    Route::get('/articals/add', 'ArticalController@create');
    Route::post('/articals/store', 'ArticalController@store');
    Route::get('/articals/edit/{id}','ArticalController@edit');
    Route::post('/articals/update/{id}','ArticalController@update');
    Route::get('/articals/delete/{id}','ArticalController@destroy');
    Route::get('/articals/show/{id}', 'ArticalController@show');

//  Auth::routes();
//  Route::get('/home', 'HomeController@index')->name('home');
//  Route::get('/create','Tasks@create');
//  Route::get('/task', 'Tasks@index');
//  Route::get('/edit/task/{id}','Tasks@edit');
//  Route::post('/edit/task/{id}','Tasks@update');
//  Route::delete('/delete/task/{id}','Tasks@destroy');
