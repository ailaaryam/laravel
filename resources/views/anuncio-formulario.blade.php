@extends('_partials/body')

@section('conteudo')

<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="mb-4 text-center">Cadastrar Anúncio</h2>

            <form action="{{ route('anuncio-store') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}">

                <div class="mb-3">
                    <label for="titulo" class="form-label fw-semibold">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" 
                           value="{{ $anuncio->titulo ?? old('titulo') }}">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label fw-semibold">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" 
                           value="{{ $anuncio->descricao ?? old('descricao') }}">
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label fw-semibold">Preço</label>
                    <input type="text" name="preco" id="preco" class="form-control" 
                           value="{{ $anuncio->preco ?? old('preco') }}">
                </div>

                <div class="mb-3">
                    <label for="data_publicacao" class="form-label fw-semibold">Data da Publicação</label>
                    <input type="text" name="data_publicacao" id="data_publicacao" class="form-control" 
                           value="{{ $anuncio->data_publicacao ?? old('data_publicacao') }}">
                </div>

                <div class="mb-4">
                    <label for="cor" class="form-label fw-semibold">Cor</label>
                    <input type="text" name="cor" id="cor" class="form-control" 
                           value="{{ $anuncio->cor ?? old('cor') }}">
                </div>

                <button type="submit" class="btn btn-success w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

@endsection
