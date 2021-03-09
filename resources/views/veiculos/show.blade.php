@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="descricoes">
        <div class="row">
            <div class="col-8 col-sm-10">
                <h1>{{ $carro->marca }}</h1>
                <h2>{{ $carro->modelo }}I</h2>
            </div>
        </div>
        <br>
        <div class="row principais">
            <div class="col-6 col-sm-3">
                <span>Ano</span>
                <br>
                <strong>{{ $carro->ano }}</strong>
            </div>
            <div class="col-6 col-sm-3">
                <span>Placa</span>
                <br>
                <strong>{{ $carro->placa }}</strong>
            </div>
            <div class="col-6 col-sm-3">
                <span>Categoria</span>
                <br>
                <strong>{{ $carro->categoria }}</strong>
            </div>
            <div class="col-6 col-sm-3">
                <span>Preço</span>
                <br>
                <strong>{{ $carro->preco }}</strong>
            </div>
        </div>
        <br>
        <hr>
        <br>
            <div class="row">
                <div class="col-6 col-sm-3">
                    <span>Descrição</span>
                    <br>
                    <strong>{{ $carro->descricao }}</strong>
                </div>
            </div>
        </div>
</div>

@endsection
