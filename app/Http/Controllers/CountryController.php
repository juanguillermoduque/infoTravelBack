<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function getAll()
    {
        return Country::all();
    }

    public function getOne($id)
    {
        return Country::findOrFail($id);

    }
}
