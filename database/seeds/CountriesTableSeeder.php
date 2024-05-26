<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
