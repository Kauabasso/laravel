<?php

namespace App\Http\Controllers;

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

    public function gravar(Request $request){
        dd($request);
    }
}
