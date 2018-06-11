<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticuloVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos__vendidos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('Precio', 10, 2);
            $table->integer('Cantidad')->unsigned();
            $table->integer('id_productos')->unsigned();
            $table->foreign('id_productos')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');
            $table->integer('id_ventas')->unsigned();
            $table->foreign('id_ventas')
                ->references('id')
                ->on('ventas')
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
        Schema::drop('articulos__vendidos');
    }
}
