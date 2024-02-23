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

use App\Http\Controllers\alumnosController;
use App\Http\Controllers\Liberacion2Controller;
use App\Http\Controllers\laboratoristasController;
use App\Http\Controllers\ayudaController;
use App\Http\Controllers\LiberacionesController;
use App\Http\Controllers\prestamosController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\TramiteController;
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    // return view('panel-control');
    return view('auth.login'); //Al iniciar el servidor, dirigir al login.
});



Route::get('/generarReporte', 'FinancierosController@show');

//Prestamos
Route::get('/cosnultarAdeudoAlumno', [prestamosController::class,'consultaAdeudoAlumno']);
Route::get('/todosPrestamos', [prestamosController::class,'todosPrestamos']);
// Route::get('/agregarPrestamo', [prestamosController::class,'agregarPrestamo']);
Route::get('/prestamosTerminados', [prestamosController::class,'prestamosTerminados']);
Route::get('/tramitesTerminados', [prestamosController::class,'tramitesTerminados']);

//Liberacion Docentes
// Route::get('/comprobanteLiberacion', [LiberacionesController::class,'mostrar_pendientes']);
Route::get('/mostrarLiberados', [LiberacionesController::class,'mostrar_liberados']);
Route::get('/comprobantesCancelados', [LiberacionesController::class,'mostrar_cancelados']);



//Ayuda
Route::get('/mostrarAyuda', [ayudaController::class,'mostrarAyuda']);

Route::get('/informacionLaboratorios', 'laboratoristasController@show');

Route::get('/consultarArticulos', [laboratoristasController::class, 'mostrarArticulos']);
Route::post('/consultarArticulos', [laboratoristasController::class, 'mostrarArticulos'])->name('articulos_mayores.post');

Route::get('/consultarArticulosMenores', [laboratoristasController::class, 'mostrarArticulosMenores']);






Route::post('articulosMAME',[PrestamoController::class, 'mostrarArticulos']);
Route::post('numeroControlGet',[PrestamoController::class, 'mostrarNumeroControl']);
Route::post('crearprestamo','PrestamoController@crearPrestamo')->name('crearprestamo');
Route::get('crearprestamo2','PrestamoController@crearPrestamo')->name('crearprestamo2');
Route::get('PDFdescargar','PrestamoController@PDF')->name('PDFdescargar');
Route::get('storeprueba',[PrestamoController::class, 'store'])->name('storeprueba');
Route::post('storeprueba2',[TramiteController::class, 'store'])->name('storeprueba2');
Route::get('storeprueba3',[TramiteController::class, 'store'])->name('storeprueba3');
Route::get('crearTramite','TramiteController@crearTramites')->name('crearTramite');
Route::get('anularTramite','LiberacionController@anularTramite')->name('anularTramite');
Route::get('mayoresStore','ArticuloMayorLabController@store')->name('mayoresStore');




Route::resource('Personal', 'PersonalController');
Route::resource('Prestamos', 'PrestamoController');
Route::resource('Tramite', 'TramiteController');
Route::resource('Liberacion', 'LiberacionController');
Route::resource('Articulos_mayores','ArticulosMayoresController');
Route::resource('Articulos_menores','ArticulosMenoresController');
Route::resource('ArticulosMayoresLab','ArticuloMayorLabController');
Route::resource('ArticulosMenoresLab','ArticuloMenorLabController');
Route::resource('GenerarLiberacion','GenerarLiberacionController');
Route::resource('ArticulosEnviados','ArticulosEnviadosController');
Route::get('Enviados','ArticulosEnviadosController@store')->name('Enviados');
Route::post('EnviadosPost','ArticulosEnviadosController@store')->name('EnviadosPost');
Route::get('prueba','ArticulosEnviadosController@index')->name('prueba');

Route::resource('PruebaLupita','PruebaController');



Route::resource('PruebaRuta','PruebaController');


