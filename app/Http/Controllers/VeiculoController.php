<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VeiculoModel;

class VeiculoController extends Controller
{
    function formulario(){
        return view('veiculo-formulario');
    }

    function store(Request $dados){
        $veiculo = new VeiculoModel();
        $veiculo->create($dados->all());
    }

    function listar(){
         $veiculos = VeiculoModel::all();
        return view('veiculo-listar', ['veiculos'=>$vaiculos ]);
    }

    function remover($id){
        VeiculoModel::destroy($id);
        return redirect()->route('veiculo-listar');
    }

    function editar($id){
        $veiculo = VeiculoModel::find($sid);
        return view('veiculo-formulario', ['veiculo' => $veiculo]);
    }
}
