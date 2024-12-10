<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $metrics = [
            'usuariosTotales' => 15432,
            'productosAdquiridos' => 10293,
            'ventasTotales' => 89000,
            'enMora' => 2040,
        ];
    
        $salesData = [
            'labels' => ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
            'data' => [12000, 15000, 14000, 18000, 20000, 22000],
        ];
    
        $productos = [
            [
                'name' => 'Centro de Ahorro',
                'cliente' => 'Juan Pérez',
                'fecha' => '12.09.2019 - 12:53 PM',
                'cantidad' => '$34,295',
                'status' => 'Abierto',
            ],
        ];
    
        return view('admin.dashboard', compact('metrics', 'salesData', 'productos'));
    }
    
}
