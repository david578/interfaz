<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Nombre del producto
            $table->text('descripcion')->nullable(); // Descripción del producto
            $table->string('imagen')->nullable(); // URL de la imagen
            $table->decimal('precio', 10, 2)->default(0); // Precio del producto
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
