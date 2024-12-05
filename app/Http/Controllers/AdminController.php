<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.inicio');
    }
}
