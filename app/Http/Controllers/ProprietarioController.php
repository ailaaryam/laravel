<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietarioModel;

class ProprietarioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
    }

    function store(Request $dados){
        $proprietario = new ProprietarioModel();
        $proprietario->create($dados->all());
    }

    function listar(){
        $proprietarios = ProprietarioModel::all();
        return view('proprietario-listar', ['proprietario'=>$proprietario ]);
    }

    function remover($id){
       ProprietarioModel::destroy($id);
        return redirect()->route('proprietario-listar');
    }

    function editar($id){
        $proprietario = ProprietarioModel::find($sid);
        return view('proprietario-formulario', ['proprietario' => $proprietario]);
    }
}
