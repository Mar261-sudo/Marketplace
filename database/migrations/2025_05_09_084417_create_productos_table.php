<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug') -> unique();
            $table->string('descripcion');
            $table->decimal ('valor' , 10,2);
            $table->string ('imagen');
            $table-> boolean('estado')-> default(true);
            $table-> enum('estado_producto',['nuevo','poco uso','usado']);
            $table -> foreignId('categoria_id')-> constrained ('categorias');
            $table -> foreignId('usuario_id')-> constrained ('usuarios');    
            $table -> foreignId('ciudad_id')-> constrained ('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
