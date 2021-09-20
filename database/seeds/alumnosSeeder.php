<?php
use App\alumnos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class alumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

       

       // Insertar 1 registros en cada tabla mediante Seeders.
        DB::table('alumnos')->insert([

            'nombre'=>'Josue',
            'apellido'=>'Mozo',
            'fechanacimiento'=>'11-04-1997',
            'direccion'=>'Cuyultitan, La Paz',
            'genero'=>'masculino',
            'telefono'=>'7337-6424',
            'correo'=>'mozojosue1997@gmail.com',
            'clave'=>bcrypt('mozo123456'),
        ]);
//------------------------------------------------------------------------------------------------------------------------------------------------------------
        //   Insertar 1 registro en cada tabla mediante el método Insert.
        DB::insert('INSERT INTO alumnos (nombre, apellido, fechanacimiento, direccion, genero, telefono, correo, clave ) VALUES(?,?,?,?,?,?,?,?)', ['Ezequiel','Garcia','11-05-1996','Olocuilta, La Paz,','masculino','62049135','garciajosue@gmai.com', bcrypt('josue123')]);

//------------------------------------------------------------------------------------------------------------------------------------------------------------

        //Realizar una consulta SQL Utilizando el Método select mediante DB::select la cual me permita seleccionar todos los alumnos que tengo en mi base de datos
        
        /*$consultaAlumnos = DB::select('SELECT * FROM alumnos');
        dd($consultaAlumnos);*/

//------------------------------------------------------------------------------------------------------------------------------------------------------------
        //Generar un modelo para la tabla alumno, la cual me permita insertar un registro mediante Eloquent en el archivo alumnos del Seeder.
        alumnos::create([

            'nombre'=>'Daniel',
            'apellido'=>'Mozo',
            'fechanacimiento'=>'11-12-1997',
            'direccion'=>'San Salvador',
            'genero'=>'masculino',
            'telefono'=>'6532-6424',
            'correo'=>'daniel@gmail.com',
            'clave'=>bcrypt('patito123'),
        ]);

//------------------------------------------------------------------------------------------------------------------------------------------------------------
        
       // Generar 18 registros de prueba para la tabla alumnos y la tabla profesor mediante los Model Factories (Generar por medio del Seeder o generarlo por medio de Tinker).
        factory(alumnos::class, 18)->create();
//------------------------------------------------------------------------------------------------------------------------------------------------------------
        //Realizar una consulta SQL Utilizando el Método select mediante DB::select la cual me permita seleccionar todos los alumnos que tengo en mi base de datos
       /* $consultaAlumnos = DB::select('SELECT * FROM alumnos');
        dd($consultaAlumnos);*/
        
    }
}
