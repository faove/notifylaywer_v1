<?php

use Illuminate\Database\Seeder;

class TypeCommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo de Comunicacion 1 = NOTIFICACION / 3= EMPLAZAMIENTO    /  5 = CITACOPN / 7 = REQUERIMIENTO.
        \DB::table('type_communications')->delete();

        \DB::table('type_communications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notification',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Emplacement', //Emplazamiento
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Appointment', //cita
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Requirement', //Requerimiento
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
