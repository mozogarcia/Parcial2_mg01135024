<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('alumnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('profesor')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cursos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('notas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

      

        $this->call(alumnosSeeder::class);
        $this->call(profesorSeeder::class);
      
        $this->call(cursosSeeder::class);
        $this->call(notasSeeder::class);


    }
}
