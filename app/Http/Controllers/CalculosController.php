<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function soma($valor1, $valor2){
        return 'Soma:' . $valor1 + $valor2;
    }
}
