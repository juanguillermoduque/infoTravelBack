<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;

class CityController extends Controller
{
    public function getAll()
    {
        return City::all();
    }

    public function getOne($id)
    {
        return City::findOrFail($id);
    }

    public function getByCityId($id)
    {
        $country = Country::with('cities')->find($id);
        
        if (!$country) {
            return response()->json(['message' => 'Country not found'], 404);
        }

        return response()->json($country->cities);
    }
}
