<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetCode(Request $request)
    {
        // Validar el correo electrónico
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Generar un código de verificación único
        $code = Str::random(6);

        // Guardar el código en la base de datos o usar una tabla temporal
        $user = User::where('email', $request->email)->first();
        $user->update(['verification_code' => $code]);

        // Enviar el correo electrónico
        Mail::send('emails.reset_code', ['code' => $code], function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Código de verificación para restablecer contraseña');
        });

        // Redirigir con un mensaje de éxito
        return back()->with('status', 'El código de verificación ha sido enviado a tu correo.');
    }
}

