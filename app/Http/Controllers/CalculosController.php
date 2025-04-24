<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function somar($valor1, $valor2)
    {
        return 'Soma:' . $valor1 + $valor2;
    }
    function subtrair($valor1, $valor2)
    {
        return 'Substração:' . $valor1 - $valor2;
    }
    function quadrado($valor1)
    {
        return 'Número ao Quadrado:' . $valor1 * $valor1;
    }
}
