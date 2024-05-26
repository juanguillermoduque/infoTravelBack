<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{

    //Se insertan los datos de las ciudades
    //Se insertan las ciudades Londres, Oxford, Tokio, Kioto, Jaipur, Amber, Copenhague y Aarhus
    //Se insertan los nombres de las ciudades y los nombres de las ciudades en la API
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Londres','apiName' => 'London'],
            ['name' => 'Oxford','apiName' => 'Oxford'],
            ['name' => 'Tokio','apiName' => 'Tokyo'],
            ['name' => 'Kioto','apiName' => 'Kyoto'],
            ['name' => 'Jaipur','apiName' => 'Jaipur'],
            ['name' => 'Amber','apiName' => 'Amber'],
            ['name' => 'Copenhague','apiName' => 'Copenhagen'],
            ['name' => 'Aarhus','apiName' => 'Aarhus'],
        ]);
    }
}
