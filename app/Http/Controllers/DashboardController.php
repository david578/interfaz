<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $stats = [
            'usuarios_totales' => 15432,
            'productos_adquiridos' => 10293,
            'ventas_totales' => 89000,
            'en_mora' => 2040,
        ];
    
        $ventas = [10, 20, 15, 30, 25, 40];
        return view('admin.dashboard', compact('stats', 'ventas'));
    }
}
