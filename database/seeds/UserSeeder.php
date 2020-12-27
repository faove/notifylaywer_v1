<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            ['id' => 1, 'name' => 'Administrador', 'email' => 'faovenezuela@gmail.com', 'password' => Hash::make('adminadmin')],
            ['id' => 2, 'name' => 'Administrador', 'email' => 'npino34@gmail.com', 'password' => Hash::make('npino34')],
            ['id' => 3, 'name' => 'Anna', 'email' => 'npino34@gmail.com', 'password' => Hash::make('notifylaywer')],
            ['id' => 4, 'name' => 'Helen Pino', 'email' => 'npino34@gmail.com', 'password' => Hash::make('notifylaywer')],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
