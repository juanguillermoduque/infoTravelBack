<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;

class CityController extends Controller
{

    //Retorna todas las ciudades que esten almacenadas en la bd
    public function getAll()
    {
        return City::all();
    }

    //Retorna una ciudad especifica por su id
    //parametro id = id de la ciudad
    public function getOne($id)
    {
        return City::findOrFail($id);
    }

    //Retorna las ciudades de un país especifico
    //parametro id  = id del país
    public function getByCityId($id)
    {
        $country = Country::with('cities')->find($id);
        
        if (!$country) {
            return response()->json(['message' => 'Country not found'], 404);
        }

        return response()->json($country->cities);
    }
}
