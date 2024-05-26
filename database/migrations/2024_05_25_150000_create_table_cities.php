<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCities extends Migration
{

    //Se crea la tabla cities con los campos name y apiName
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apiName');
        });
    }

    //Se elimina la tabla cities en caso de que exista
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
