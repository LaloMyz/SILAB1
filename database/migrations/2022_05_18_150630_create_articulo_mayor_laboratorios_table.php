<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloMayorLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_mayor_laboratorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_articulo_mayor');
            $table->unsignedBigInteger('id_laboratorio');

            $table->foreign('id_articulo_mayor')->references('id')->on('articulo_mayors');
            $table->foreign('id_laboratorio')->references('id')->on('laboratorios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_mayor_laboratorios');
    }
}
