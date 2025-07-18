<?php


use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\KeepinhoController;

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Keepinho
Route::prefix('/keep')->group(function () {
    Route::get('/', [KeepinhoController::class, 'index'])->name('keep');

    Route::post('/gravar', [
        KeepinhoController::class,
        'gravar'
    ])->name('keep.gravar');


    Route::get('/editar/{nota}', [
        KeepinhoController::class,
        'editar'
    ])->name('keep.editar');

    Route::put('/editar', [
        KeepinhoController::class,
        'editar'
    ])->name('keep.editarGravar');//Ação

    Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');

    Route::get('/lixeira', [KeepinhoController::class, 'lixeira'])->name('keep.lixeira');

    Route::get('/restaurar/{nota}', [KeepinhoController::class, 'restaurar'])->name('keep.restaurar');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('produtos', ProdutosController::class);



Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::get('/carrinho/gravar/{produto}', [CarrinhoController::class, 'gravar'])->name('carrinho.gravar');
Route::get('/carrinho/remover/{produto}', [CarrinhoController::class, 'apagar'])->name('carrinho.apagar');


require __DIR__ . '/auth.php';