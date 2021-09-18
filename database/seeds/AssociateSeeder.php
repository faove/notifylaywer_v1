<?php

use Illuminate\Database\Seeder;
use App\Associates;

class AssociateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $associates = array(
            ['id' => 1, 'name' => 'Administrador', 'email' => 'faovenezuela@gmail.com', 'dni' => '55555'],
            ['id' => 2, 'name' => 'Administrador', 'email' => 'npino34@gmail.com', 'dni' =>'5555'],
            ['id' => 3, 'name' => 'Anna', 'email' => 'anna@gmail.com', 'dni' => '5666666'],
            ['id' => 4, 'name' => 'Helen Pino', 'email' => 'helenpino@gmail.com', 'dni' =>'7667676'],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($associates as $associate) {
            Associates::create($associate);
        }
    }
}
