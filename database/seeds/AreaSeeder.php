<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
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
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'DIVORCIO CONTENCIOSO',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'DIVORCIO MUTUO ACUERDO',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'CUSTODIA MENORES CONTENCIOSO',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'CUSTODIA MENORES MUTUO ACUERDO',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'DEMANDA EJECUCIÓN IMPAGO PENSIONES',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'SUSTRACCIÓN INTERNACIONAL DE MENORES',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => '1', //Codigo de Categoria atendidas 
                'name' => 'RECLAMACIÓN DEUDA',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => '1', //Codigo de Categoria atendidas  
                'name' => 'INCUMPLIMIENTO CONTRACTUAL',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => '1', //Codigo de Categoria atendidas  
                'name' => 'FORMATION BUSINESS',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
