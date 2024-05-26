<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    //se indica la tabla de MYSQL a la que hace referencia el modelo
    protected $table = 'cities';
    public function countries()
    {
        //se indica la tabla intermedia y las llaves foraneas
        return $this->belongsToMany(Country::class, 'countries_cities', 'city_id', 'country_id')
        ->withPivot('id');
    }
}
