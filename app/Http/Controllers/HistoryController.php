<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{

    //Retorna el historial de consultas
    public function getAll()
    {
        $history = History::orderBy('id', 'desc')->limit(5)->get();
        return response()->json($history);
    }

    //Guarda el historial de consultas
    //en el cuerpo de la petición se debe enviar los siguientes datos
    //country, city, budget, temperature, moneyName, moneySymbol, exchangeRate, convertedBudget
    public function saveHistory(Request $request)
    { 
        $history = new History;
        $history->country = $request->country;
        $history->city = $request->city;
        $history->budget = $request->budget;
        $history->temperature = $request->temperature;
        $history->moneyName = $request->moneyName;
        $history->moneySymbol = $request->moneySymbol;
        $history->exchangeRate = $request->exchangeRate;
        $history->convertedBudget = $request->convertedBudget;
    
        $history->save();
        return response()->json(['message' => 'Registro creado exitosamente', 'data' => $history], 201);
    }
}
