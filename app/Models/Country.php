<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public function cities()
    {
        return $this->belongsToMany(City::class, 'countries_cities', 'country_id' , 'city_id')
        ->withPivot('id');
    }
}
