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
        // $this->call(AreaSpecialties::class);
        $this->call(Areas::class); //table areas
        $this->call(AreaSpecialties::class); //table areas
        $this->call(AssociateSeeder::class);
        $this->call(CitieSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CommunicationSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TypeCommunicationSeeder::class);
        $this->call(TypeServiceSeeder::class);
        $this->call(ReasonSeeder::class);
        $this->call(UserSeeder::class); //table users
    }
}
