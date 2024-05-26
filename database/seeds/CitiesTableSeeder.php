<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
