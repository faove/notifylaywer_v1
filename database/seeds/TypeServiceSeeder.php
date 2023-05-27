<?php

use Illuminate\Database\Seeder;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1= Consultoría / 3 = Asesoría
        \DB::table('type_services')->delete();

        \DB::table('type_services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Asesoría', //Asesoría Advisory
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Consultoría', //Consultoría Consultancy
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

    }
}
