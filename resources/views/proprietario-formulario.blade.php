@extends('_partials/body')

@section('conteudo')

<form action="{{ route('proprietario-store') }}" method="post" class="container mt-5" style="max-width: 500px;">
    @csrf

    <input type="hidden" name="id" value="{{ $proprietario->id ?? old('id') }}">

    <div class="mb-4">
        <label for="nome" class="form-label fw-semibold">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $proprietario->nome ?? old('nome') }}" class="form-control" placeholder="Digite seu nome">
    </div>

    <div class="mb-4">
        <label for="cpf" class="form-label fw-semibold">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="{{ $proprietario->cpf ?? old('cpf') }}" class="form-control" placeholder="Digite seu CPF">
    </div>

    <div class="mb-4">
        <label for="telefone" class="form-label fw-semibold">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $proprietario->telefone ?? old('telefone') }}" class="form-control" placeholder="Digite seu telefone">
    </div>

    <div class="mb-4">
        <label for="email" class="form-label fw-semibold">E-mail:</label>
        <input type="text" name="email" id="email" value="{{ $proprietario->email ?? old('email') }}" class="form-control" placeholder="Digite seu e-mail">
    </div>

    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
    <p></p>
    <a href="/" class="btn btn-success w-100">Voltar para a pagina principal</a>
</form>

@endsection