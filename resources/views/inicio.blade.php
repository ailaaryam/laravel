@extends('_partials/body')
@section('conteudo')

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Bem-vindo à Página de Anúncios</h1>
        <p class="text-muted fs-5">Gerencie veículos, proprietários e anúncios facilmente</p>
    </div>

    <div class="row g-4">
        {{-- Formulários --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-primary">
                <div class="card-body text-center">
                    <h5 class="card-title">Cadastrar Veículo</h5>
                    <p class="card-text text-muted">Adicione um novo veículo ao sistema.</p>
                    <a href="{{ route('veiculo-formulario') }}" class="btn btn-primary w-100">Cadastrar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-success">
                <div class="card-body text-center">
                    <h5 class="card-title">Cadastrar Proprietário</h5>
                    <p class="card-text text-muted">Registre os dados do proprietário.</p>
                    <a href="{{ route('proprietario-formulario') }}" class="btn btn-success w-100">Cadastrar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-info">
                <div class="card-body text-center">
                    <h5 class="card-title">Cadastrar Anúncio</h5>
                    <p class="card-text text-muted">Crie um novo anúncio para venda.</p>
                    <a href="{{ route('anuncio-formulario') }}" class="btn btn-info w-100 text-white">Cadastrar</a>
                </div>
            </div>
        </div>

        {{-- Listagens --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-primary">
                <div class="card-body text-center">
                    <h5 class="card-title">Listar Veículos</h5>
                    <p class="card-text text-muted">Veja todos os veículos cadastrados.</p>
                    <a href="{{ route('veiculo-listar') }}" class="btn btn-outline-primary w-100">Listar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-success">
                <div class="card-body text-center">
                    <h5 class="card-title">Listar Proprietários</h5>
                    <p class="card-text text-muted">Veja os proprietários registrados.</p>
                    <a href="{{ route('proprietario-listar') }}" class="btn btn-outline-success w-100">Listar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-info">
                <div class="card-body text-center">
                    <h5 class="card-title">Listar Anúncios</h5>
                    <p class="card-text text-muted">Veja todos os anúncios ativos.</p>
                    <a href="{{ route('anuncio-listar') }}" class="btn btn-outline-info w-100">Listar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection