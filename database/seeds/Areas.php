<?php

use Illuminate\Database\Seeder;

class Areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 'ATEN', //Codigo de Areas atendidas 
                'code' => '01',
                'name' => 'Civil y Comercial',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category' => 'ATEN', //Codigo de Areas atendidas
                'code' => '02',
                'name' => 'Mercantil',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category' => 'ATEN', //Codigo de Areas atendidas
                'code' => '03',
                'name' => 'Penal',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category' => 'ATEN',
                'code' => '04',
                'name' => 'Informatico',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category' => 'ATEN',
                'code' => '05',
                'name' => 'Previsional',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category' => 'ATEN',
                'code' => '06',
                'name' => 'Empresarial y Fiscal',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category' => 'ATEN',
                'code' => '07',
                'name' => 'Familia y sucesiones',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
