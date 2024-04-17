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

Route::get('/', 'MenuController@index')->name('menu.index');
Route::get('/casa', 'MenuController@casa')->name('menu.casa');
Route::get('/fotos', 'MenuController@fotos')->name('menu.fotos');
Route::get('/contacto', 'MenuController@contacto')->name('menu.contacto');