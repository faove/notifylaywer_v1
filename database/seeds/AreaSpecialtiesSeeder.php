<?php

use Illuminate\Database\Seeder;

class AreaSpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('areas_specialties')->delete();

        \DB::table('areas_specialties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'areas_id' => 1,
                'name' => 'Contratos',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'areas_id' => 1,
                'name' => 'Escrituración',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'areas_id' => 1,
                'name' => 'Sociedades',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'areas_id' => 1,
                'name' => 'Concursos',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'areas_id' => 1,
                'name' => 'Quiebras',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
