<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesCitiesTableSeeder extends Seeder
{

    //Se insertan los datos de las ciudades y paises
    //Se insertan las ciudades Londres, Oxford, Tokio, Kioto, Jaipur, Amber, Copenhague y Aarhus
    //Se insertan los nombres de las ciudades y los nombres de las ciudades en la API
    public function run()
    {
        DB::table('countries_cities')->insert([
            ['country_id' => '1','city_id'=>"1"],
            ['country_id' => '1','city_id'=>"2"],
            ['country_id' => '2','city_id'=>"3"],
            ['country_id' => '2','city_id'=>"4"],
            ['country_id' => '3','city_id'=>"5"],
            ['country_id' => '3','city_id'=>"6"],
            ['country_id' => '4','city_id'=>"7"],
            ['country_id' => '4','city_id'=>"8"]
        ]);
    }
}
