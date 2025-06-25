@extends('_partials/body')

@section('conteudo')

<form action="{{ route('veiculo-store') }}" method="post" class="container mt-4" style="max-width: 500px;">
    @csrf

    <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">

    <div class="mb-3">
        <label for="marca" class="form-label fw-semibold">Marca</label>
        <input type="text" name="marca" id="marca" value="{{ $veiculo->marca ?? old('marca') }}" class="form-control" placeholder="Digite a marca">
    </div>

    <div class="mb-3">
        <label for="modelo" class="form-label fw-semibold">Modelo</label>
        <input type="text" name="modelo" id="modelo" value="{{ $veiculo->modelo ?? old('modelo') }}" class="form-control" placeholder="Digite o modelo">
    </div>

    <div class="mb-3">
        <label for="ano" class="form-label fw-semibold">Ano</label>
        <input type="text" name="ano" id="ano" value="{{ $veiculo->ano ?? old('ano') }}" class="form-control" placeholder="Digite o ano">
    </div>

    <div class="mb-3">
        <label for="placa" class="form-label fw-semibold">Placa</label>
        <input type="text" name="placa" id="placa" value="{{ $veiculo->placa ?? old('placa') }}" class="form-control" placeholder="Digite a placa">
    </div>

    <div class="mb-4">
        <label for="cor" class="form-label fw-semibold">Cor</label>
        <input type="text" name="cor" id="cor" value="{{ $veiculo->cor ?? old('cor') }}" class="form-control" placeholder="Digite a cor">
    </div>

    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
</form>

@endsection