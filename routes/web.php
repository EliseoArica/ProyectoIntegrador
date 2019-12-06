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
    return view('inicio.home');
});


// RUTAS DE INICIO 

Route::get('/login-final', function () {
    return view('auth.login');
})->name('login_final');

Route::post('/login/general', 'LoginController@login')->name('loginGeneral');


Route::get('/register-alumno', function () {
    return view('inicio.registerAlumno');
})->name('register_alumno');

Route::get('/register-empresa', function () {
    return view('inicio.registerEmpresa');
})->name('register_empresa');

Route::post('/register-empresa', 'User\UserController@registrarEmpresa')->name('registro_empresa');
Route::post('/register-alumno', 'User\UserController@store')->name('registrar_alumno');




// RUTAS DEL ALUMNO
Route::get('/inicio', function () {
    return view('inicio.home');
})->name('inicio');

Route::get('/visualizar', function () {
    return view('usuarios.alumno.visualizar');
})->name('visualizar');

Route::get('/postular', function () {
    return view('usuarios.alumno.postular');
})->name('postular');

Route::get('/postulaciones', function () {
    return view('usuarios.alumno.postulaciones');
})->name('postulaciones');

Route::get('/editar-alumno', function () {
    return view('usuarios.alumno.editar');
})->name('editar_alumno');

Route::get('/detalle-oferta', function () {
    return view('usuarios.alumno.detalle');
})->name('detalle_oferta');


// RUTAS DE LA EMPRESA 

Route::get('/crear-oferta', function () {
    return view('usuarios.empresa.crear');
})->name('crear_oferta');

Route::get('/detalle-postulante', function () {
    return view('usuarios.empresa.detalle');
})->name('detalle_postulante');

Route::get('/editar-empresa', function () {
    return view('usuarios.empresa.editar');
})->name('editar_empresa');

Route::get('/postulante-oferta', function () {
    return view('usuarios.empresa.postulanteoferta');
})->name('postulante_oferta');

Route::get('/postulantes', function () {
    return view('usuarios.empresa.postulantes');
})->name('postulantes');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
