<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave');
            $table->string('nombre', 255);
            $table->string('etiqueta');
            $table->string('descripcion_corta', 100);
            $table->text('descripcion');
            $table->text('descripcion_larga');
            $table->string('incluye1');
            $table->string('incluye2');
            $table->decimal('precio', 10, 2);
            $table->string('imagen', 300);
            $table->boolean('visible');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');
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
        Schema::drop('productos');
    }
}
