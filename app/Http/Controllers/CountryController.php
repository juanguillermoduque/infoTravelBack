<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{

    //Retorna todos los países que esten almacenados en la bd
    public function getAll()
    {
        return Country::all();
    }


    //Retorna un país especifico por su id
    //parametro id = id del país
    public function getOne($id)
    {
        return Country::findOrFail($id);

    }
}
