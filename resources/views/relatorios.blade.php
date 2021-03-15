@extends('layouts.app')

@section('title', 'Relatórios')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <relatorios
            novo="{{$contNovo}}" seminovo="{{$contSemi}}" usado="{{$contUsado}}"
            gasolina="{{$contGasol}}" etanol="{{$contEtanol}}" diesel="{{$contDiesel}}" flex="{{$contFlex}}"
            automatico="{{$contAutom}}" manual="{{$contManual}}"
            vendido="{{$contVendido}}" disponivel="{{$contDisponivel}}"
            dois="{{$contPortaDois}}" quatro="{{$contPortaQuatro}}"
        ></relatorios>

    </div>

<script>
    export default {

    }
</script>
@endsection
