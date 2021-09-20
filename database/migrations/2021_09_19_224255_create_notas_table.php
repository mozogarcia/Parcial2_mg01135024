<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



//Creando tabla notas y sus respectivas relaciones
class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nota1');
            $table->string('nota2');
            $table->string('nota3');
            $table->string('nota4');
            $table->string('promedio');
            $table->string('parcial');
            $table->unsignedInteger('idalumno')->nullable();
            $table->foreign('idalumno')->references('idalumno')->on('alumnos');
            $table->unsignedInteger('idcursos')->nullable();
            $table->foreign('idcursos')->references('idcursos')->on('cursos');
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
        Schema::dropIfExists('notas');
    }
}
