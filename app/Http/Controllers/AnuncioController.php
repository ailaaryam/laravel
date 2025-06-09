<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }
    function store(Request $dados){
        $anuncio = new AnuncioModel();
        $anuncio->create($dados->all());
    }

    function listar(){
        $anuncios = AnuncioModel::all();
        return view('anuncio-listar', ['anuncio'=>$anuncio]);
    }

    function remover($id){
        AnuncioModel::destroy($id);
        return redirect()->route('anuncio-listar');
    }

    function editar($id){
        $anuncio = AnuncioModel::find($sid);
        return view('Anuncio-formulario', ['anuncio' => $anuncio]);
    }
}
