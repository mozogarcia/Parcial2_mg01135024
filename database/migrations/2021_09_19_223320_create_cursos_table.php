<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


//Creando tabla cursos y sus respectivas relaciones
class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('idcursos');
            $table->string('nombrecurso');
            $table->string('año');
            $table->string('ciclo');
            $table->unsignedInteger('idprofesor')->nullable();
            $table->foreign('idprofesor')->references('idprofesor')->on('profesor');
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
        Schema::dropIfExists('cursos');
    }
}
