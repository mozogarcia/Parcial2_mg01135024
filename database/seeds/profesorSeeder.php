<?php
use App\profesor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class profesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // Insertar 1 registros en cada tabla mediante Seeders.
        DB::table('profesor')->insert([

            'nombre'=>'Juan',
            'apellido'=>'Rodrigez',
            'dui'=>'1245785-5',
            'telefono'=>'7337-6556',
            'email'=>'juan@gmail.com',
            'clave'=>bcrypt('juan123456'),
            
        ]);

//------------------------------------------------------------------------------------------------------------------------------------------------------------        
        //Insertar 1 registro en cada tabla mediante el método Insert.
        DB::insert('INSERT INTO profesor (nombre, apellido, dui, telefono, email, clave) VALUES(?,?,?,?,?,?)', ['Carlos','Alvarez','1325785-5','63059745','alvarez@gmai.com', bcrypt('carlitos123')]);
//------------------------------------------------------------------------------------------------------------------------------------------------------------
        //Generar 18 registros de prueba para la tabla alumnos y la tabla profesor mediante los Model Factories (Generar por medio del Seeder o generarlo por medio de Tinker).
        factory(profesor::class, 18)->create();
    }
}
