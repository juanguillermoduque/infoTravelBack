<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCountriesCities extends Migration
{

    //Se crea la tabla countries_cities con las llaves foraneas city_id y country_id
    public function up()
    {
        Schema::create('countries_cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('country_id');

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    //Se elimina la tabla countries_cities en caso de que exista
    public function down()
    {
        Schema::dropIfExists('countries_cities');
    }
}
