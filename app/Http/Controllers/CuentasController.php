<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class CuentasController extends Controller
{

    /*public function login(){
        return view('login');
    }*/

    /*public function registrar(Request $request){
        $persona = new Persona();
        $persona->email = $request->email;
        $persona->password = $request->password;
    }*/
    /*public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $persona = new Persona();
        $persona->email = $request->email;
        $persona->password = $request->password;
        return view('vista-inicio');
    }*/


    public function menu_inicio(){
        return view('vista-inicio');
    }
    public function gestionar_cuentas(){
        return view('vista-cuentas');
    }
    
    public function actualizar_info(){
        return view('editar-informacion');
    }

    public function eliminar_cuenta(){
        return view('vista-eliminar-cuenta');
    }

    public function transaccion()
    {
        return view('vista-transacciones');
    }

    public function operar_nomina(){
        return view('vista-nomina');
    }

    public function transferir(){
        return view('vista-transferir');

    }

    public function retirar(){
        return view('vista-retiros');

    }

    public function extractos(){
        return view('vista-extractos');
    }
}
