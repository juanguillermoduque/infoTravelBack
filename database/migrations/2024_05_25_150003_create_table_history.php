<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHistory extends Migration
{
    //Se crea la tabla history con los campos country, city, budget, temperature, moneyName, moneySymbol, exchangeRate y convertedBudget
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('budget');
            $table->string('temperature');
            $table->string('moneyName');
            $table->string('moneySymbol');
            $table->string('exchangeRate');
            $table->string('convertedBudget');
        });
    }

    //Se elimina la tabla history en caso de que exista
    public function down()
    {
        Schema::dropIfExists('history');
    }
}
