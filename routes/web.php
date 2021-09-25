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

Route::get('/', 'PageController@posts');
Route::get('blog/{post}', 'PageController@post')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*
 * ***Flujo de trabajo con laravel***
 * 
 * Crear las tablas con las migraciones y tambien llenarla con datos de prueba
 * 
 * Configurar la ruta.
 * 
 * Crear el controlador con << php artisan make:controller NombreController >>
 * 
 * Configurar el controlador
 * 
 * Configurar las vistas
*/



