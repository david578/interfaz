<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cajerocontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
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
Route::post('/usuarios', [AdminController::class, 'store'])->name('usuarios.store');
Route::get('password/forgot', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.forgot');
Route::post('password/forgot', [ForgotPasswordController::class, 'sendResetCode'])->name('password.email.code');
Route::get('/password/enter-code', [ResetPasswordController::class, 'showEnterCodeForm'])->name('password.enter.code');
Route::post('/password/verify-code', [ResetPasswordController::class, 'verifyCode'])->name('password.verify.code');
Route::post('/password/resend-code', [ResetPasswordController::class, 'resendCode'])->name('password.resend.code');
// Mostrar el formulario para cambiar la contraseña (después de verificar el código)
Route::get('/password/reset', [ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
// Actualizar la contraseñ
Route::post('/password/update', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('/admin_inicio', [AdminController::class, 'index'])->name('admin.inicio');
//rutas gestion de usuario
use App\Http\Controllers\UserController;
Route::get('/usuarios', [AdminController::class, 'index1'])->name('usuarios.index');
Route::get('/usuarios/crear', [AdminController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [AdminController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{id}/editar', [AdminController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [adminController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [AdminController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/nomina',[CuentasController::class, 'operar_nomina'])->name('pago.nomina');




