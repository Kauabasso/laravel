<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
   
});
Route::get('/teste', function(){
    return view('teste');//somente se existe uma pasta teste na views
});
Route::get('/teste/{valor}', function($valor){
    return "Você digitou: {$valor}";
});
Route::get('/teste/{valor1}/{valor2}', function($valor1,$valor2){
    $Soma= $valor1 + $valor2;
    return "Soma: {$Soma}";
});

//Cálculos
