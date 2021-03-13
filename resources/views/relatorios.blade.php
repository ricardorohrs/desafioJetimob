@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <relatorios
            novo="{{$contNovo}}" seminovo="{{$contSemi}}" usado="{{$contUsado}}"
            gasolina="{{$contGasol}}" etanol="{{$contEtanol}}" diesel="{{$contDiesel}}" flex="{{$contFlex}}" gnv="{{$contGNV}}"
            automatico="{{$contAutom}}" manual="{{$contManual}}"
        ></relatorios>

    </div>

<script>
    export default {
        data () {
            return {
                categoria: {
                    novo: $contNovo,
                    seminovo: $contSemi,
                    usado: $contUsado,
                },
                combustivel: {
                    gasolina: $contGasol,
                    etanol: $contEtanol,
                    diesel: $contDiesel,
                    flex: $contFlex,
                    gnv: $contGNV,
                },
                cambio: {
                    automatico: $contAutom,
                    manual: $contManual,
                }
            }
        }
    }
</script>
@endsection
