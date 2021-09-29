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

Route::resource('posts', 'Backend\PostController')
    ->middleware('auth')
    ->except('show');



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
 * 
 * Para configurar un area de administracion lo haces creando el controlador con << php artisan make:controller Backend/PostController --resource --model=NombreModelo >>
 * 
 * Para guardar un registro se crea un request con << php artisan make:request PostRequest >> y ahi se agrega la validacion, y se agrega esa clase en el controlador correspondiente
 * 
 * En el controlador se configura el metodo store/update/delete (Tambien hay que configurar el fillable en el modelo o entidad)
 * 
*/



