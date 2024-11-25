<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Sobrescribe el método predeterminado para manejar el restablecimiento de contraseña.
     */
    public function reset(Request $request)
    {
        // Valida la solicitud
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Intenta restablecer la contraseña
        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();

                $this->guard()->login($user); // Opcional, para iniciar sesión automáticamente
            }
        );

        // Redirige basado en el resultado
        return $response == Password::PASSWORD_RESET
            ? redirect($this->redirectPath())->with('status', __($response))
            : back()->withErrors(['email' => [__($response)]]);
    }



        public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:6',
        ]);

        // Lógica para verificar el código
        if ($request->code === session('verification_code')) {
            return redirect()->route('password.reset.form')->with('status', 'Código verificado correctamente.');
        }

        return back()->with('error', 'El código ingresado no es válido.');
    }


    public function resendCode(Request $request)
    {
        // Generar y enviar un nuevo código
        $newCode = random_int(100000, 999999);
        session(['verification_code' => $newCode]);

        // Lógica para enviar el código por correo
        // Mail::to($request->email)->send(new VerificationCodeMail($newCode));

        return back()->with('status', 'Se ha enviado un nuevo código a tu correo.');
    }


        public function showEnterCodeForm()
    {
        return view('auth.verify'); // Asegúrate de que esta vista exista
    }



}
