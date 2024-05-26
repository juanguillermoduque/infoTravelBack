<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //Se ejecutan los seeders de las tablas cities, countries y countries_cities
    public function run()
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CountriesCitiesTableSeeder::class);
    }
}
