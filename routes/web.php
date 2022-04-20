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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/producto', function () {
    return view('producto.index');
});

Route::get('/mapaCucei', 'MapaController@index')->name('mapa');

Route::get('/local/{nombre}', 'LocalController@index')->name('local');

Route::resource('/productos', 'ProductoController')->middleware('auth');

Route::resource('/users', 'UserController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
