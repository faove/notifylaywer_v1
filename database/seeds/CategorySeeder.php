<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Family Law',  //FAMILY LAW
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Litigation', //LITIGATION
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Will a Probate',  //WILLS A ND PROBATE
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Inmigration', //INMIGRATION
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Business Setup', //BUSINESS SETUP
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Employment', //EMPLOYMENT
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Real State', //REAL STATE
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Tax', //TAX
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Claims (Suspended)', //CLAIMS (SUSPENDED)
                'status' => 1,
                'category' => 'LAWYER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
