<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function testCountries()
    {
        $response = $this->get('/countries');
        $response->assertStatus(200);
    }

    public function testCountriesId()
    {
        $response = $this->get('countries/1');
        $response->assertStatus(200);
    }

    public function testCities()
    {
        $response = $this->get('cities');
        $response->assertStatus(200);
    }

    public function testCitiesId()
    {
        $response = $this->get('cities/1');
        $response->assertStatus(200);
    }

    public function testCitiesByCountry()
    {
        $response = $this->get('cities/1/by_country');
        $response->assertStatus(200);
    }

    public function testHistoryGet()
    {
        $response = $this->get('history');
        $response->assertStatus(200);
    }

    public function testHistoryPost()
    {
        $data = [
            'country' => 'Colombia',
            'city' => "pereira",
            'budget' => '1234567689',
            'temperature' => "30",
            'moneyName' => 'peso colombiano',
            'moneySymbol' => "$",
            'exchangeRate' => '1',
            'convertedBudget' => '123'
        ];

        $response = $this->post('history',$data);
        $response->assertStatus(201);
    }
}
