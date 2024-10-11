<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class TestController extends Controller
{
    function test(){
        // COnectar con el modelo que conecta a la base de datos
        $client = Client::find(1);
        var_dump($client); //Imprime todos los datos de paso

        //2 retornar una vista con la información del modelo
        return view('testdb', ['client' => $client]);
    }
}
