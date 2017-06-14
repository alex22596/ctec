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
    Route::get('/servicios', 'ServiciosDefaultController@returnView');

    Route::post('/login', 'AdministradorController@iniciarSesion')->name('login.post');
    Route::post('/instalaciones/serviciosseleccionados', 'RequestController@instalaciones');
    Route::post('/cuestionarios/agregarcuestionario','RequestController@cuestionarios');
    Route::post('/preguntas/agregarpregunta','RequestController@preguntas');

    Route::post('/preguntas/agregarpreguntadefault','PreguntasDefaultController@preguntasdefault')
        ->name('preguntas.agregarpreguntadefault');
    Route::resource('instalaciones', 'InstalacionController');
    Route::resource('serviciosdefault','ServiciosDefaultController');
    Route::resource('preguntas','PreguntasDefaultController');
    Route::resource('cuestionarios','CuestionarioController');
});