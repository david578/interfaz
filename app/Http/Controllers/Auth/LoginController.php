<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers;

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


    protected function redirectTo()
    {
        $role = Auth::user()->roles->pluck('name')->first(); // Obtén el rol del usuario
        switch ($role) {
            case 'Admin':
                return '/admin/dashboard';
            case 'Cajero':
                return '/cajero/dashboard';
            case 'Empresa':
                return '/empresa/dashboard';
            default:
                return '/home'; // Ruta por defecto
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('Admin')) {
            return redirect()->route('admin.inicio');
        } elseif ($user->hasRole('Cajero')) {
            return redirect()->route('estado');
        } elseif ($user->hasRole('Empresa')) {
            return redirect()->route('transaccion');
        } else {
            return redirect('/'); // Redirigir a una página predeterminada si no tiene un rol específico
        }
    }

}
