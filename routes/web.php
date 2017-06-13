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

    Route::get('/preguntas', function () {
        return view('backLayout.preguntas.indexpreguntas');
    });

    Route::get('/instalaciones', function () {
        return view('backLayout.instalaciones.indexinstalaciones');
    });

    Route::get('/cuestionarios', function () {
        return view('backLayout.cuestionarios.indexcuestionarios');
    });

    Route::get('/enviarcuestionario', function () {
        return view("");
    });

    Route::get('/reportes', function () {
        return view("");
    });

    Route::post('/login', 'AdministradorController@iniciarSesion')->name('login.post');
    Route::post('/instalaciones/serviciosseleccionados', 'RequestController@instalaciones');
    Route::post('/cuestionarios/agregarcuestionario','RequestController@cuestionarios');
    Route::post('/preguntas/agregarpregunta','RequestController@preguntas');
    Route::post('/preguntas/agregarpreguntadefault','RequestController@preguntasdefault');


    Route::resource('instalaciones', 'InstalacionController');
    Route::resource('serviciosdefault','ServiciosDefaultController');
    Route::resource('preguntasdefault','PreguntasDefaultController');
    Route::resource('cuestionarios','CuestionarioController');

});