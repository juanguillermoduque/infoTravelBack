<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    protected $table = 'cities';
    public function countries()
    {
        return $this->belongsToMany(Country::class, 'countries_cities', 'city_id', 'country_id')
        ->withPivot('id');
    }
}
