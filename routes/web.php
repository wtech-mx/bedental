<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\Livewire\Calendar;
use App\Http\Controllers\AlertasController;
use App\Http\Controllers\ColoresController;
use App\Http\Controllers\RadiografiaController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\AntecedentesController;
use App\Http\Controllers\EspecialistsController;
use App\Http\Controllers\ControlpagosController;
use App\Http\Controllers\OdontogramaController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('permisos', PermisosController::class);
    Route::resource('users', UserController::class);
});

//Route Hooks - Do not delete//

//Route::view('especialists', 'livewire.especialists.index')->name('especialists.index')->middleware('auth');

/*|--------------------------------------------------------------------------
|Colores
|--------------------------------------------------------------------------*/
Route::post('colores/create', [ColoresController::class, 'create'])->name('colores.create');
Route::post('colores/update/{id}', [ColoresController::class, 'update_colores'])->name('colores.update_colores');
/*|--------------------------------------------------------------------------
|Clientes
|--------------------------------------------------------------------------*/
Route::get('client', [ClientController::class, 'index'])->name('clients.index');
Route::post('create/client', [ClientController::class, 'store'])->name('client.store');
Route::patch('update/client/{id}', [ClientController::class, 'update'])->name('client.update');
Route::patch('cambio/correo/{id}', [ClientController::class, 'upload'])->name('client_correo.upload');

/*|--------------------------------------------------------------------------
|Doctores
|--------------------------------------------------------------------------*/

Route::get('especialists', [EspecialistsController::class, 'index'])->name('especialists.index');
Route::post('create/especialists', [EspecialistsController::class, 'store'])->name('especialists.store');
Route::patch('update/especialists/{id}', [EspecialistsController::class, 'update'])->name('especialists.update');

/*|--------------------------------------------------------------------------
|Historial clinico
|--------------------------------------------------------------------------*/
Route::get('antecedente', [AntecedentesController::class, 'index'])->name('antecedentes.index');
Route::post('create/antecedentes', [AntecedentesController::class, 'store'])->name('antecedentes.store');
Route::patch('update/antecedentes/{id}', [AntecedentesController::class, 'update'])->name('antecedentes.update');

/*|--------------------------------------------------------------------------
|Calendario
|--------------------------------------------------------------------------*/

Route::get('calendar', [AlertasController::class, 'index_calendar'])->name('calendar.index_calendar');
Route::post('calendar', [AlertasController::class, 'store_calendar'])->name('calendar.store_calendar');
Route::get('calendar/show', [AlertasController::class, 'show_calendar'])->name('calendar.show_calendar');
Route::patch('calendar/destroy/{id}', [AlertasController::class, 'destroy_calendar'])->name('calendar.destroy_calendar');
Route::patch('calendar/update/{id}', [AlertasController::class, 'update_calendar'])->name('calendar.update_calendar');

Route::post('create_pacient', [ClientController::class, 'store_client'])->name('client.calendar_store');

Route::post('radiografia/{id}', [RadiografiaController::class, 'upload'])->name('radiografia.upload');

/*|--------------------------------------------------------------------------
|facturas
|--------------------------------------------------------------------------*/

Route::get('facturas', [FacturasController::class, 'index'])->name('facturas.index');
Route::post('factura/{id}', [FacturasController::class, 'store'])->name('factura.store');
Route::patch('facturas/{id}', [FacturasController::class, 'upload'])->name('facturas.upload');
Route::post('create_factura', [FacturasController::class, 'store_factura'])->name('factura.create_store');

/*|--------------------------------------------------------------------------
|Control de pagos
|--------------------------------------------------------------------------*/

Route::get('control_pagos', [ControlpagosController::class, 'index'])->name('control_pagos.index');
Route::patch('control_pagos/{id}', [ControlpagosController::class, 'update'])->name('control_pagos.update');
/*|--------------------------------------------------------------------------
|email
|--------------------------------------------------------------------------*/

Route::get("email", [MailerController::class, "email"])->name("email");
Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");

/*|--------------------------------------------------------------------------
|Retenedores
|--------------------------------------------------------------------------*/
Route::get('recordatorios', [AlertasController::class, 'index_recordatorios'])->name('recordatorios.index');

/*|--------------------------------------------------------------------------
|Odontograma
|--------------------------------------------------------------------------*/
Route::get('odontograma', [OdontogramaController::class, 'index'])->name('odontograma.index');
Route::get('odontograma/create', [OdontogramaController::class, 'create'])->name('odontograma.create');
Route::post('odontograma', [OdontogramaController::class, 'store'])->name('odontograma.store');
Route::patch('odontograma/{id}', [OdontogramaController::class, 'update'])->name('odontograma.update');
