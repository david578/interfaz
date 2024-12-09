<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        Producto::create([
            'nombre' => 'Préstamos Comerciales',
            'descripcion' => 'Ofrecemos préstamos para empresas con tasas competitivas.',
            'imagen' => 'prestamos_comerciales.jpg',
            'precio' => 0, // Si no tiene precio fijo, déjalo en 0
        ]);

        Producto::create([
            'nombre' => 'Cuenta Corriente',
            'descripcion' => 'Gestión ágil y segura de tu cuenta corriente.',
            'imagen' => 'cuenta_corriente.jpg',
            'precio' => 0,
        ]);

        Producto::create([
            'nombre' => 'Cuenta de Ahorros',
            'descripcion' => 'Ahorra para tu futuro con tasas de interés atractivas.',
            'imagen' => 'cuenta_ahorros.jpg',
            'precio' => 0,
        ]);

        Producto::create([
            'nombre' => 'Tarjetas Débito y Crédito',
            'descripcion' => 'Tarjetas personalizadas para tus necesidades financieras.',
            'imagen' => 'tarjetas_credito_debito.jpg',
            'precio' => 0,
        ]);

        Producto::create([
            'nombre' => 'Seguros de Vida',
            'descripcion' => 'Protege a tu familia con nuestros seguros de vida.',
            'imagen' => 'seguros_vida.jpg',
            'precio' => 0,
        ]);
    }
}
