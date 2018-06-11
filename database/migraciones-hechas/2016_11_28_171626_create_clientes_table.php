<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social');
            $table->string('rfc')->unique();
            $table->string('nombre_comercial');
            $table->string('contribuyente');
            $table->string('calle');
            $table->integer('no_exterior');
            $table->integer('no_interior');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('cp');
            $table->string('pais');
            $table->string('estado');
            $table->integer('telefono');
            $table->string('correo_facturacion');
            $table->string('nombre_apellidos');
            $table->string('puesto');
            $table->string('correo')->unique();
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
        Schema::drop('clientes');
    }
}
