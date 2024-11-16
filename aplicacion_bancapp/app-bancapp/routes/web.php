<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;

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
Route::get('/',[CuentasController::class, 'menu_inicio'])->name('gestionar.cuentas');
Route::get('/transacciones',[CuentasController::class, 'transaccion'])->name('hacer.transaccion');
Route::get('/nomina',[CuentasController::class, 'operar_nomina'])->name('pago.nomina');


