<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function gestionar_cuentas(){
        return view('vista-cuentas');
    }
}
