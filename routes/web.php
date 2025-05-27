<?php

use App\Http\Controllers\AutenticaController;
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

    Route::get('/editar/{nota}', [KeepinhoController::class,
    'editar'])->name('keep.editar');

    Route::put('/editar', [KeepinhoController::class,
    'editar'])->name('keep.editarGravar');//Ação

    Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');

    Route::get('/lixeira',[KeepinhoController::class,'lixeira'])->name('keep.lixeira');

    Route::get('/restaurar/{nota}', [KeepinhoController::class,'restaurar'])->name('keep.restaurar');
});

Route::get('/autenticar', [AutenticaController::class, 'index'])->name('autentica');

Route::post('/autenticar/gravar', [AutenticaController::class, 'gravar'])->name('autentica.gravar');

Route::get('/autenticar/login', [AutenticaController::class,'login'])->name('autentica.login');

Route::post('/autenticar/login',[AutenticaController::class,'login']);