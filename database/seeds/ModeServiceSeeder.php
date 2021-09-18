<?php

use Illuminate\Database\Seeder;

class ModeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Telefónica / Teleconferencia / Presencial / Domiciliaria / Asistencia Legal POR ACTOS
        \DB::table('mode_services')->delete();

        \DB::table('mode_services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Telephone', //Telefónica
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Teleconference', //Teleconferencia
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'In person', //Presencial
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Home', //Domiciliaria
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Legal assistance', //Asistencia Legal
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
