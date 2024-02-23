<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->boolean('status');
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_laboratorio');

            $table->foreign('id_alumno')->references('id')->on('alumnos');
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
        Schema::dropIfExists('prestamos');
    }
}
