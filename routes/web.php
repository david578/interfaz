<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cajerocontroller;
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

Route::get('/',[CuentasController::class, 'menu_inicio'])->name('gestionar.cuentas');

Auth::routes();
// añadi
Route::get('/estado',[cajerocontroller::class,'esta'])->name( 'estado');
Route::get('/consignacion',[cajerocontroller::class,'consig'])->name( 'consignacion');
Route::get('/estracto',[cajerocontroller::class,'estracto'])->name( 'estracto');
Route::get('/cajero',[cajerocontroller::class,'metodo'])->name( 'cajero');
// añadi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/admin_inicio', [AdminController::class, 'index'])->name('admin.inicio');


Route::get('/transacciones',[CuentasController::class, 'transaccion'])->name('hacer.transaccion');
Route::get('/nomina',[CuentasController::class, 'operar_nomina'])->name('pago.nomina');




