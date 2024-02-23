<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoArticuloMayorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_articulo_mayors', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('id_articulo_mayor');
            $table->unsignedBigInteger('id_prestamo');

            $table->foreign('id_articulo_mayor')->references('id')->on('articulo_mayor_laboratorios');
            $table->foreign('id_prestamo')->references('id')->on('prestamos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamo_articulo_mayors');
    }
}
