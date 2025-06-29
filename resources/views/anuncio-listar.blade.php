@extends('_partials/body')
@section('conteudo')

<div class="container mt-5">
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-primary text-white">
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Data de publicação</th>
                <th>Cor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anuncios as $anuncio)
                <tr>
                    <td>{{ $anuncio->id }}</td>
                    <td>{{ $anuncio->titulo }}</td>
                    <td>{{ $anuncio->descricao }}</td>
                    <td>{{ $anuncio->preco }}</td>
                    <td>{{ $anuncio->data_publicacao }}</td>
                    <td>{{ $anuncio->cor }}</td>
                    <td>
                        <a href="/anuncio/remover/{{ $anuncio->id }}" class="btn btn-sm btn-outline-danger me-2">Excluir</a>
                        <a href="/anuncio/editar/{{ $anuncio->id }}" class="btn btn-sm btn-outline-primary">Atualizar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/" class="btn btn-sm btn-outline-primary">Voltar para a pagina principal</a>
</div>

@endsection
