<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCountries extends Migration
{
    
    //Se crea la tabla countries con los campos name y apiName
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apiName');
        });
    }

    //Se elimina la tabla countries en caso de que exista
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
