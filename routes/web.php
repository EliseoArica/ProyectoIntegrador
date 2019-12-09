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

Route::post('/register-alumno', 'User\UserController@store')->name('registrar_alumno');

Route::get('/register-empresa', function () {
    return view('inicio.registerEmpresa');
})->name('register_empresa');

Route::post('/register-empresa', 'User\UserController@registrarEmpresa')->name('registro_empresa');




// RUTAS DEL ALUMNO
Route::get('/inicio', function () {
    return view('inicio.home');
})->name('inicio');

Route::get('/visualizar', 'Offer\OfferController@index')->name('visualizar'); 
Route::get('/detalle_oferta/{id}', 'Offer\OfferController@show')->name('detalle_oferta');


Route::get('/postular/{id}', 'Postulation\PostulationController@show')->name('postular_oferta');

Route::post('/postular_oferta/{id}', 'Postulation\PostulationController@store')->name('postular');


Route::get('/postulaciones', 'Postulation\StudentOfferController@show')->name('postulaciones');


Route::get('/editar_alumno', 'User\UserController@mostrarAlumno')->name('editar_alumno');

Route::put('/alumno_actualizado', 'User\UserController@actualizarAlumno')->name('actualizar_alumno');




// RUTAS DE LA EMPRESA 

Route::get('/crear-oferta', 'Offer\OfferController@create')->name('crear_oferta');

Route::get('/detalle-postulante', function () {
    return view('usuarios.empresa.detalle');
})->name('detalle_postulante');

Route::get('/editar-empresa', function () {
    return view('usuarios.empresa.editar');
})->name('editar_empresa');

Route::get('/editar_empresa', 'User\UserController@mostrarEmpresa')->name('editar_empresa');

Route::put('/empresa_actualizada', 'User\UserController@actualizarEmpresa')->name('actualizar_empresa');

Route::get('/postulante-oferta', function () {
    return view('usuarios.empresa.postulanteoferta');
})->name('postulante_oferta');

Route::get('/postulantes', function () {
    return view('usuarios.empresa.postulantes');
})->name('postulantes');


// Rutas del administrador


Route::get('/admin-dashboard', function () {
    return view('usuarios.admin.dashboard');
})->name('admin_dashboard');

Route::get('/admin-alumno', 'Admin\StudentController@index')->name('admin_tablas_alumno');

Route::get('/admin-empresa', 'Admin\CompanyController@index')->name('admin_tablas_empresa');

Route::get('/admin-estadisticas', function () {
    return view('usuarios.admin.chart');
})->name('admin_estadistica');

Route::delete('/admin/eliminar-alumno/{id}', 'Admin\StudentController@destroy')->name('eliminar_alumno');

Route::delete('/admin/eliminar-empresa/{id}', 'Admin\CompanyController@destroy')->name('eliminar_empresa');















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
