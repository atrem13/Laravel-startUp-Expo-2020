<?php

use Illuminate\Routing\Router;
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

Route::get('/', 'MainController@index')->name('main.index');
Route::resource('tenant', 'tenantController');
Route::resource('streaming', 'streamingController');
Route::resource('galery', 'galeryController');
Route::get('/delay', function(){
    return view('delay.index');
});


