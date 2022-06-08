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
    Route::resource('clients', ClientController::class);
});

//Route Hooks - Do not delete//
Route::view('antecedentes', 'livewire.antecedentes.index')->name('antecedentes.index')->middleware('auth');
Route::view('clients', 'livewire.clients.index')->name('clients.index')->middleware('auth');
Route::view('especialists', 'livewire.especialists.index')->name('especialists.index')->middleware('auth');

/*|--------------------------------------------------------------------------
|Colores
|--------------------------------------------------------------------------*/
Route::patch('colores/update/{id}', [ColoresController::class, 'update_colores'])->name('colores.update_colores');


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

Route::post('factura/{id}', [FacturasController::class, 'store'])->name('factura.store');
