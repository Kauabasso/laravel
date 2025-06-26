<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }

   public function apagar($id)
{
    $carrinho = session()->get('carrinho', []);
    unset($carrinho[$id]); 
    session()->put('carrinho', $carrinho);
    return redirect()->route('carrinho.index');
}


   public function gravar(Request $request)
{
    $dados = $request->validate([
        'id' => 'required|integer',
        'nome' => 'required|string',
        'preco' => 'required|numeric',
        'imagem' => 'nullable|string',
    ]);

    $carrinho = session()->get('carrinho', []);

    $carrinho[$dados['id']] = [
        'nome' => $dados['nome'],
        'preco' => $dados['preco'],
        'imagem' => $dados['imagem'],
    ];

    session()->put('carrinho', $carrinho);

    return redirect()->route('carrinho.index');
}

}

