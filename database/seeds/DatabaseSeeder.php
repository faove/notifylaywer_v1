<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Datos áreas
        $this->call(AreaSeeder::class); 
        $this->call(AreaSpecialtiesSeeder::class);
        //Categories
        $this->call(CategorySeeder::class);
        //Datos Asociados
        $this->call(AssociateSeeder::class);
        //Ciudades    
        $this->call(CitieSeeder::class);
        //Clientes
        $this->call(ClientSeeder::class);
        $this->call(CommunicationSeeder::class);
        //Facturas
        $this->call(InvoiceSeeder::class);
        //Plazos de Entregas
        $this->call(DeliveryTimesSeeder::class);
        //Servicios
        $this->call(ServiceSeeder::class);
        //tipo de Comunicacion
        $this->call(TypeCommunicationSeeder::class);
        //Tipo de Servicios
        $this->call(TypeServiceSeeder::class);
        //Motivo de la comunicación
        $this->call(ReasonSeeder::class);
        //Datos de Usuarios
        $this->call(UserSeeder::class); //table users
    }
}
