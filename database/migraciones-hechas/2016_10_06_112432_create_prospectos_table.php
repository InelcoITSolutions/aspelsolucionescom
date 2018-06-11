<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectos', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('Nombre', 100);
            $table->string('Correo', 100)->unique();
            $table->integer('Telefono');
            $table->string('Empresa', 100);
            $table->string('Interesado', 50);
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
        Schema::drop('prospectos');
    }
}
