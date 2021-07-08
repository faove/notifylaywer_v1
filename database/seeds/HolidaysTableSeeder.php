<?php

use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        \DB::table('holidays')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '2021-01-01',
                'name' => 'Año Nuevo',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '2021-01-11',
                'name' => 'Reyes Magos',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 17,
                'date' => '2021-03-22',
                'name' => 'San Jose',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 18,
                'date' => '2021-04-01',
                'name' => 'Jueves Santo',
                'working' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 19,
                'date' => '2021-04-02',
                'name' => 'Viernes Santo',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 20,
                'date' => '2021-05-01',
                'name' => 'Dia del Trabajador',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 21,
                'date' => '2021-05-17',
                'name' => 'Dia de la Asencion',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 22,
                'date' => '2021-06-07',
                'name' => 'Corpus Chisti',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 23,
                'date' => '2021-08-17',
                'name' => 'Batalla de Boyaca',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 24,
                'date' => '2021-08-16',
                'name' => 'Asuncion de la Virgen',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 25,
                'date' => '2021-10-18',
                'name' => 'Dia de la Raza',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 26,
                'date' => '2021-11-01',
                'name' => 'Todos los Santos',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 27,
                'date' => '2021-11-15',
                'name' => 'Indep. de Cartagena',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 28,
                'date' => '2021-12-25',
                'name' => 'Navidad',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 29,
                'date' => '2021-07-20',
                'name' => 'Dia de la Indepedencia',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 30,
                'date' => '2021-06-14',
                'name' => 'Sagrado Corazon',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 31,
                'date' => '2021-12-08',
                'name' => 'Inmaculada Concepcion',
                'working' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
