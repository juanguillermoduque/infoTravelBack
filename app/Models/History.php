<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //se indica la tabla de MYSQL a la que hace referencia el modelo
    protected $table = 'history';

    //se indica que no se utilizaran los campos created_at y updated_at
    public $timestamps = false;

    //se indica los campos que se pueden llenar
    protected $fillable = [
        'country',
        'city',
        'budget',
        'temperature',
        'moneyName',
        'moneySymbol',
        'exchangeRate',
        'convertedBudget'
    ];

}
