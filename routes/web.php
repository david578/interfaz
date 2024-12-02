<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use illuminate\support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[CuentasController::class, 'login']);
// Route::post('/',[CuentasController::class, 'store'])->name('store.formulario');
// Route::post('/registro',[CuentasController::class, 'registrar'])->name('registro.formulario');
Route::get('/',[CuentasController::class, 'menu_inicio'])->name('ruta.menu');


Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/cuenta',[CuentasController::class, 'gestionar_cuentas'])->name('gestionar.cuentas');
Route::get('/cuenta-editar',[CuentasController::class, 'actualizar_info'])->name('ruta.editarinfo');
Route::get('/cuenta-eliminar',[CuentasController::class, 'eliminar_cuenta'])->name('ruta.eliminar.cuenta');
Route::get('/inicio',[CuentasController::class, 'transaccion'])->name('hacer.transaccion');
Route::get('/transferencia',[CuentasController::class, 'transferir'])->name('ruta.transfiere');
Route::get('/retiros',[CuentasController::class, 'retirar'])->name('ruta.retiros');
Route::get('/extractos',[CuentasController::class, 'extractos'])->name('ruta.extractos');

Route::get('/nomina',[CuentasController::class, 'operar_nomina'])->name('pago.nomina');




