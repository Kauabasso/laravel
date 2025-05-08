<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/teste', function () {
    return view('teste');//somente se existe uma pasta teste na views
});
Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});
Route::get('/calc/somar/{valor1}/{valor2}', [CalculosController::class, 'somar']);

Route::get('/calc/subtrair/{valor1}/{valor2}', [CalculosController::class, 'subtrair']);

Route::get('/calc/quadrado/{valor1}', [CalculosController::class, 'quadrado']);
//Cálculos

//Keepinho
Route::prefix('/keep')->group(function (){
    Route::get('/', [KeepinhoController::class,'index'])->name('keep');

    Route::post('/gravar', [KeepinhoController::class,
    'gravar'])->name('keep.gravar');

    Route::get('/editar/{voo}', [KeepinhoController::class,
    'editar'])->name('keep.editar');

    Route::put('/editar', [KeepinhoController::class,
    'editar'])->name('keep.editarGravar');//Ação

    Route::delete('/apagar/{voo}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');
});