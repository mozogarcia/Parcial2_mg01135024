<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertar 1 registros en cada tabla mediante Seeders.
        DB::table('cursos')->insert([

            'nombrecurso'=>'Programacion',
            'año'=>'2021',
            'ciclo'=>'II',
            'idprofesor'=>'1'
        ]);
//------------------------------------------------------------------------------------------------------------------------------------------------------------

        //Insertar 1 registro en cada tabla mediante el método Insert.
        DB::insert('INSERT INTO cursos (nombrecurso, año, ciclo, idprofesor) VALUES(?,?,?,?)', ['Base de datos','2021','I','1']);
    }
}


