<?php

use Illuminate\Database\Seeder;


class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $ciudades = 
        ['Álava','Albacete','Alicante','Almería','Asturias','Ávila','Badajoz','Barcelona','Burgos','Cáceres',
        'Cádiz','Cantabria','Castellón','Ciudad Real','Córdoba','La Coruña','Cuenca','Gerona','Granada','Guadalajara',
        'Guipúzcoa','Huelva','Huesca','Islas Baleares','Jaén','León','Lérida','Lugo','Madrid','Málaga','Murcia','Navarra',
        'Orense','Palencia','Las Palmas','Pontevedra','La Rioja','Salamanca','Segovia','Sevilla','Soria','Tarragona',
        'Santa Cruz de Tenerife','Teruel','Toledo','Valencia','Valladolid','Vizcaya','Zamora','Zaragoza'];

        $comunidades = ["Andalucía", "Aragón", "Canarias", "Cantabria", "Castilla y León", "Castilla-La Mancha", "Cataluña", "Ceuta", "Comunidad Valenciana", "Comunidad de Madrid", "Extremadura", "Galicia", "Islas Baleares", "La Rioja", "Melilla", "Navarra", "País Vasco", "Principado de Asturias", "Región de Murcia"];
       
        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array(
            ['id' => 1, 'name' => 'Álava'],
            ['id' => 2, 'name' => 'Albacete'],
            ['id' => 3, 'name' => 'Alicante'],
            ['id' => 4, 'name' => 'Almería'],
            ['id' => 5, 'name' => 'Asturias'],
            ['id' => 6, 'name' => 'Ávila'],
            ['id' => 7, 'name' => 'Badajoz'],
            ['id' => 8, 'name' => 'Barcelona'],
            ['id' => 9, 'name' => 'Burgos'],
            ['id' => 10, 'name' => 'Cáceres'],
            ['id' => 11, 'name' => 'Cádiz'],
            ['id' => 12, 'name' => 'Cantabria'],
            ['id' => 13, 'name' => 'Castellón'],
            ['id' => 14, 'name' => 'Ciudad Real'],
            ['id' => 15, 'name' => 'Córdoba'],
            ['id' => 16, 'name' => 'La Coruña'],
            ['id' => 17, 'name' => 'Cuenca'],
            ['id' => 18, 'name' => 'Gerona'],
            ['id' => 19, 'name' => 'Granada'],
            ['id' => 20, 'name' => 'Guadalajara'],
            ['id' => 21, 'name' => 'Guipúzcoa'],
            ['id' => 22, 'name' => 'Huelva'],
            ['id' => 23, 'name' => 'Huesca'],
            ['id' => 24, 'name' => 'Islas Baleares'],
            ['id' => 25, 'name' => 'Jaén'],
            ['id' => 26, 'name' => 'León'],
            ['id' => 27, 'name' => 'Lérida'],
            ['id' => 28, 'name' => 'Lugo'],
            ['id' => 29, 'name' => 'Madrid'],
            ['id' => 30, 'name' => 'Málaga'],
            ['id' => 31, 'name' => 'Murcia'],
            ['id' => 32, 'name' => 'Navarra'],
            ['id' => 33, 'name' => 'Orense'],
            ['id' => 34, 'name' => 'Palencia'],
            ['id' => 35, 'name' => 'Las Palmas'],
            ['id' => 36, 'name' => 'Pontevedra'],
            ['id' => 37, 'name' => 'La Rioja'],
            ['id' => 38, 'name' => 'Salamanca'],
            ['id' => 39, 'name' => 'Segovia'],
            ['id' => 40, 'name' => 'Sevilla'],
            ['id' => 41, 'name' => 'Soria'],
            ['id' => 42, 'name' => 'Tarragona'],
            ['id' => 43, 'name' => 'Santa Cruz de Tenerife'],
            ['id' => 44, 'name' => 'Teruel'],
            ['id' => 45, 'name' => 'Toledo'],
            ['id' => 46, 'name' => 'Valencia'],
            ['id' => 47, 'name' => 'Valladolid'],
            ['id' => 48, 'name' => 'Vizcaya'],
            ['id' => 49, 'name' => 'Zamora'],
            ['id' => 50, 'name' => 'Zaragoza'],
        ));

        
    }
}
