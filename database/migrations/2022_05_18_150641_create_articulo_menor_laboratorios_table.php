<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloMenorLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_menor_laboratorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_articulo_menor');
            $table->unsignedBigInteger('id_laboratorio');

            $table->foreign('id_articulo_menor')->references('id')->on('articulo_menors');
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
        Schema::dropIfExists('articulo_menor_laboratorios');
    }
}
