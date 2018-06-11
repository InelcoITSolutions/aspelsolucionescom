<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosNuevosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_nuevos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_producto');
            $table->string('tipo');
            $table->string('incluye1');
            $table->string('incluye2');
            $table->decimal('precio', 10, 2);
            $table->decimal('precio_mas1usuario', 10, 2);
            $table->decimal('precio_mas2usuario', 10, 2);
            $table->decimal('precio_mas3usuario', 10, 2);
            $table->decimal('precio_mas4usuario', 10, 2);
            $table->decimal('precio_mas5usuario', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos_nuevos');
    }
}
