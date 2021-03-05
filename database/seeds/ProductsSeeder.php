<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('products')->delete();

        // \DB::table('products')->insert(array (
        //     0 => 
        //     array (
        //         'id' => 1,
        //         'services_id' => 1,
        //         'lexido' => '1-1-1',
        //         'name_products' => 'Compilación y traducción documentos', //Compilación y traducción documentos
        //         'deadlines' => 15,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     1 => 
        //     array (
        //         'id' => 2,
        //         'services_id' => 1,
        //         'lexido' => '1-1-2',
        //         'name_products' => 'Redacción demanda', //Redacción demanda
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     2 => 
        //     array (
        //         'id' => 3,
        //         'services_id' => 1,
        //         'lexido' => '1-1-3',
        //         'name_products' => 'Envio demanda a cliente para aprobación', //Envio demanda a cliente para aprobación
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     3 => 
        //     array (
        //         'id' => 4,
        //         'services_id' => 1,
        //         'lexido' => '1-1-4',
        //         'name_products' => 'Presentación demanda', //Presentación demanda
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     4 => 
        //     array (
        //         'id' => 5,
        //         'services_id' => 1,
        //         'lexido' => '1-1-5',
        //         'name_products' => 'Decreto de admisión ', //Decreto de admisión 
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     5 => 
        //     array (
        //         'id' => 6,
        //         'services_id' => 1,
        //         'lexido' => '1-1-5',
        //         'name_products' => 'Otorgamiento poder (si aplicable)', //Otorgamiento poder (si aplicable)
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     6 => 
        //     array (
        //         'id' => 7,
        //         'services_id' => 1,
        //         'lexido' => '1-1-6',
        //         'name_products' => 'Traslado documentos a parte contraria', //Traslado documentos a parte contraria
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     7 => 
        //     array (
        //         'id' => 8,
        //         'services_id' => 1,
        //         'lexido' => '1-1-7',
        //         'name_products' => 'Contestación a la demanda', //Contestación a la demanda
        //         'deadlines' => 1,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     8 => 
        //     array (
        //         'id' => 9,
        //         'services_id' => 1,
        //         'lexido' => '1-1-8',
        //         'name_products' => 'Señalamiento de juicio', //Señalamiento de juicio
        //         'deadlines' => 2,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     9 => 
        //     array (
        //         'id' => 10,
        //         'services_id' => 1,
        //         'lexido' => '1-1-9',
        //         'name_products' => 'Proposición de testigos', //Proposición de testigos 
        //         'deadlines' => 7,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     10 => 
        //     array (
        //         'id' => 11,
        //         'services_id' => 1,
        //         'lexido' => '1-1-10',
        //         'name_products' => 'Preparación juicio', //Preparación juicio
        //         'deadlines' => 6,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     11 => 
        //     array (
        //         'id' => 12,
        //         'services_id' => 1,
        //         'lexido' => '1-1-11',
        //         'name_products' => 'Juicio', //Juicio 
        //         'deadlines' => 3,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     12 => 
        //     array (
        //         'id' => 13,
        //         'services_id' => 1,
        //         'lexido' => '1-1-12',
        //         'name_products' => 'Sentencia', //Sentencia
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     13 => 
        //     array (
        //         'id' => 14,
        //         'services_id' => 2,
        //         'lexido' => '1-2-13',
        //         'name_products' => 'Compilación información y traducción documentos', //Compilación información y traducción documentos 
        //         'deadlines' => 11,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     14 => 
        //     array (
        //         'id' => 15,
        //         'services_id' => 2,
        //         'lexido' => '1-2-14',
        //         'name_products' => ' Redacción propuesta de acuerdo y plan de parentalidad', // Redacción propuesta de acuerdo y plan de parentalidad 
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     15 => 
        //     array (
        //         'id' => 16,
        //         'services_id' => 2,
        //         'lexido' => '1-2-15',
        //         'name_products' => 'Envio propuesta a las partes para aprobación', //Envio propuesta a las partes para aprobación
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     16 => 
        //     array (
        //         'id' => 17,
        //         'services_id' => 2,
        //         'lexido' => '1-2-16',
        //         'name_products' => 'Envio propuesta a las partes para aprobación', //Envio propuesta a las partes para aprobación
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     17 => 
        //     array (
        //         'id' => 18,
        //         'services_id' => 2,
        //         'lexido' => '1-2-17',
        //         'name_products' => 'Redacción demanda solicitando homologación del acuerdo', //Redacción demanda solicitando homologación del acuerdo
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     18 => 
        //     array (
        //         'id' => 19,
        //         'services_id' => 2,
        //         'lexido' => '1-2-19',
        //         'name_products' => 'Presentación demanda', //Presentación demanda
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     19 => 
        //     array (
        //         'id' => 20,
        //         'services_id' => 2,
        //         'lexido' => '1-2-19',
        //         'name_products' => 'Decreto de admisión', //Decreto de admisión
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     20 => 
        //     array (
        //         'id' => 21,
        //         'services_id' => 2,
        //         'lexido' => '1-2-20',
        //         'name_products' => 'Ratificación acuerdo ', //Ratificación acuerdo 
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        //     21 => 
        //     array (
        //         'id' => 22,
        //         'services_id' => 2,
        //         'lexido' => '1-2-21',
        //         'name_products' => 'Sentencia', //Sentencia
        //         'deadlines' => 5,
        //         'status' => 1,
        //         'created_at' => '2021-01-24 00:00:00',
        //         'updated_at' => '2021-01-24 00:00:00',
        //     ),
        // ));
    }
}
