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
Route::group(['middleware' => 'revalidate'],function(){
    Route::get('/', function () {
        return view('iniciarSesion');
    });
    Route::post('/login', 'AdministradorController@iniciarSesion')->name('login.post');
    Route::get("/instalaciones/serviciosseleccionados", "PruebaServicioController@prueba");

    Route::resource('instalaciones', 'InstalacionController');
    Route::resource('serviciosdefault','ServiciosDefaultController');
});