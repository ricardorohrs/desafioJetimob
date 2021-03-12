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
                <h1 title="marca"><strong>{{ $carro->marca }}</strong></h1>
                <br>
                <h2 title="modelo">{{ $carro->modelo }}</h2>
                <br>
            </div>
        </div>
        <br>
        <div class="row principais justify-content-between">
            <div class="col-lg-2 grow">
                <span>Ano</span>
                <br>
                <strong>{{ $carro->ano }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Placa</span>
                <br>
                <strong>{{ $carro->placa }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Categoria</span>
                <br>
                <strong>{{ $carro->categoria }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Preço</span>
                <br>
                <strong>R$ {{ $carro->preco }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Combustível</span>
                <br>
                <strong>{{ $carro->combustivel }}</strong>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row principais justify-content-between">
            <div class="col-lg-2 grow">
                <span>Quilometragem</span>
                <br>
                <strong>{{ $carro->quilometragem }} Km</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Portas</span>
                <br>
                <strong>{{ $carro->portas }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Motor</span>
                <br>
                <strong>{{ $carro->motor }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Câmbio</span>
                <br>
                <strong>{{ $carro->cambio }}</strong>
            </div>
            <div class="col-lg-2 grow">
                <span>Cor</span>
                <br>
                <strong>{{ $carro->cor }}</strong>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-10 col-sm-3">
                <span>Descrição</span>
                <br>
                <strong>{{ $carro->descricao }}</strong>
            </div>
        </div>
    </div>

</div>

@endsection
