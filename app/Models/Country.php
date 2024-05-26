<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //se indica la tabla de MYSQL a la que hace referencia el modelo
    protected $table = 'countries';

    public function cities()
    {
        //se indica la tabla intermedia y las llaves foraneas
        return $this->belongsToMany(City::class, 'countries_cities', 'country_id' , 'city_id')
        ->withPivot('id');
    }
}
