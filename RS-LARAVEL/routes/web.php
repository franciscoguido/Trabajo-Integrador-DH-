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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@mostrar');

Route::get('/nosotros', 'NosotrosController@mostrar');

Route::get('/productos', 'ProductosController@mostrar');

Route::get('/contacto', 'ContactoController@mostrar');

Route::get('/faqs', 'FaqsController@mostrar');

Route::get('/terminos', 'TerminosController@mostrar');
