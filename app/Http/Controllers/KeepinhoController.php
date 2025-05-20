<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaRequest;
use App\Models\Nota;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index(){
        $notas = Nota::all();
        //dd($notas);//importante para quando quiser entender o código(dados do banco, por exemplo)
        return view('keepinho/index', [
            'notas' => $notas,
        ]);
    }

    public function gravar(NotaRequest $request){
        //Cria uma nota com todos os valores enviados pelo formulário
        //Porém, a Model vai ficar apenas
        //com aqueles listados no $fillable
        $dados = $request->validated();//já validaos pela própria request

        Nota::create($dados);
        return redirect()->route('keep');
    }
    public function editar(Nota $nota, NotaRequest $request ){
        if ($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->fill($request->all());//economiza espaço, pega o texto e o titulo para editar(gravar)
            $nota->save();

            return redirect()->route('keep');
        }

        return view('keepinho.editar', [
            'nota'=> $nota
        ]);
       
    }
    public function apagar(Nota $nota){
        $nota->delete();
        return redirect()->route('keep');
    }
}
