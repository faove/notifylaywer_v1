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
        $this->call(UserSeeder::class); //table users
    }
}
