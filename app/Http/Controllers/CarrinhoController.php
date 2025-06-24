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

    public function apagar(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('carrinho');
    }

    public function gravar(Request $request)
    {
       
        $dados = $request->validate([
            'nome' => 'required|string',
            'preco' => 'required|numeric',
          
        ]);

        Produto::create($dados);

        return redirect()->route('carrinho'); 
    }
}

