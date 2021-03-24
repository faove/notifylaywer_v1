<?php

use Illuminate\Database\Seeder;

class TypeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('type_status')->delete();

        \DB::table('type_status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Enable', //Asesoría
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Disable', //Consultoría
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
