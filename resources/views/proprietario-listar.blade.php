@extends('_partials/body')

@section('conteudo')

<div class="container mt-5">
  <table class="table table-striped table-hover table-bordered">
    <thead class="table-primary text-white">
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($proprietarios as $proprietario)
        <tr>
          <td>{{ $proprietario->id }}</td>
          <td>{{ $proprietario->nome }}</td>
          <td>{{ $proprietario->cpf }}</td>
          <td>{{ $proprietario->telefone }}</td>
          <td>{{ $proprietario->email }}</td>
          <td>
            <a href="/proprietario/remover/{{ $proprietario->id }}" class="btn btn-sm btn-outline-danger me-2">Excluir</a>
            <a href="/proprietario/editar/{{ $proprietario->id }}" class="btn btn-sm btn-outline-primary">Atualizar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/" class="btn btn-sm btn-outline-primary">Voltar para a pagina principal</a>
</div>


@endsection