<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class CuentasController extends Controller
{

    public function login(){
        return view('login');
    }

    public function registrar(Request $request){
        $persona = new Persona();
        $persona->email = $request->email;
        $persona->password = $request->password;
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $persona = new Persona();
        $persona->email = $request->email;
        $persona->password = $request->password;
        return view('vista-inicio');
    }


    public function menu_inicio(){
        return view('gestion-cuentas');
    }
 

    public function transaccion()
    {
        return view('vista-transacciones');
    }

    public function operar_nomina(){
        return view('vista-nomina');
    }
}
