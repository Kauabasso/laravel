<?php

namespace App\Http\Controllers;


use App\Models\voos;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index(){
        $voos = voos::all();//estava notas
        //dd($notas);//importante para quando quiser entender o código(dados do banco, por exemplo)
        return view('keepinho/index', [
            'voos' => $voos,
        ]);
    }

    public function gravar(Request $request){
        //Cria uma nota com todos os valores enviados pelo formulário
        //Porém, a Model vai ficar apenas
        //com aqueles listados no $fillable

        voos::create($request->all());
        return redirect()->route('keep');
    }
    public function editar(voos $voo, Request $request ){
        if ($request->isMethod('put')){
            $voo = voos::find($request->id);
            $voo->origem = $request->origem;
            $voo->destino = $request->destino;
            $voo->data = $request->data;
            $voo->companhia = $request->companhia;
            $voo->numero_voo = $request->numero_voo;
            $voo->preco = $request->preco;
            $voo->save();

            return redirect()->route('keep');
        }

        return view('keepinho.editar', [
            'voo'=> $voo
        ]);
    }
}
