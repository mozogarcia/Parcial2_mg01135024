<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    class notasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertar 1 registros en cada tabla mediante Seeders.
        DB::table('notas')->insert([

            'nota1'=>'10',
            'nota2'=>'10',
            'nota3'=>'9',
            'nota4'=>'9',
            'promedio'=>'9.5',
            'parcial'=>'2',
            'idalumno'=>'1',
            'idcursos'=>'1',
            'idprofesor'=>'1'
        ]);
//------------------------------------------------------------------------------------------------------------------------------------------------------------

        // Insertar 1 registro en cada tabla mediante el método Insert.
        DB::insert('INSERT INTO notas (nota1, nota2, nota3, nota4, promedio, parcial, idalumno, idcursos, idprofesor  ) VALUES(?,?,?,?,?,?,?,?,?)', ['10','10','10','10', '10', '1', '2', '2', '2']);
    }
}
