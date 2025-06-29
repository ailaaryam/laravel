@extends('_partials/body')

@section('conteudo')

<div class="container mt-5">
  <table class="table table-striped table-hover table-bordered">
    <thead class="table-primary text-white">
      <tr>
        <th>Código</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Placa</th>
        <th>Cor</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($veiculos as $veiculo)
        <tr>
          <td>{{ $veiculo->id }}</td>
          <td>{{ $veiculo->marca }}</td>
          <td>{{ $veiculo->modelo }}</td>
          <td>{{ $veiculo->ano }}</td>
          <td>{{ $veiculo->placa }}</td>
          <td>{{ $veiculo->cor }}</td>
          <td>
            <a href="/veiculo/remover/{{ $veiculo->id }}" class="btn btn-sm btn-outline-danger me-2">Excluir</a>
            <a href="/veiculo/editar/{{ $veiculo->id }}" class="btn btn-sm btn-outline-primary">Atualizar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/" class="btn btn-sm btn-outline-primary">Voltar para a pagina principal</a>
</div>

@endsection