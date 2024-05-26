<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
