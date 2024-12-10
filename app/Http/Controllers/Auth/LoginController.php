<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;


use Spatie\Permission\Traits\HasRoles;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, RedirectsUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Redirigir según el rol del usuario
        if ($user->hasRole('Admin')) {
            return redirect()->route('admin.inicio'); // Asegúrate de que esta ruta exista
        }

        if ($user->hasRole('Cajero')) {
            return redirect()->route('hacer.transaccion'); // Asegúrate de que esta ruta exista
        }

        if ($user->hasRole('Empresa')) {
            return redirect()->route('gestionar.cuentas'); // Asegúrate de que esta ruta exista
        }

        // En caso de que no tenga ningún rol, redirigir al home genérico
        return redirect('/');
    }

    protected $redirectTo;
    public function redirectTo()
    {
        $user = Auth::user()->is_admin;

        $this->redirectTo = $user ? route('admin.inicio') : route('login');

        return $this->redirectTo;

    }


}
