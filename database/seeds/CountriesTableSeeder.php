<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    //Se insertan los datos de los paises
    //Se insertan los paises Inglaterra, Japón, India y Dinamarca
    //Se insertan los nombres de los paises y los nombres de los paises en la API
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Inglaterra','apiName'=> 'United Kingdom'],
            ['name' => 'Japón','apiName'=> 'Japan'],
            ['name' => 'India','apiName'=> 'India'],
            ['name' => 'Dinamarca','apiName'=> 'Denmark'],
        ]);
    }
}
