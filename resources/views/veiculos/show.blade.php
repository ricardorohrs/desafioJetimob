@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <dados-veiculo
        marca="{{$carro->marca}}" modelo="{{$carro->modelo}}" ano="{{$carro->ano}}" placa="{{$carro->placa}}" categoria="{{$carro->categoria}}"
        preco="{{$carro->preco}}" cambio="{{$carro->cambio}}" quilometragem="{{$carro->quilometragem}}" motor="{{$carro->motor}}"
        portas="{{$carro->portas}}" combustivel="{{$carro->combustivel}}" cor="{{$carro->cor}}" descricao="{{$carro->descricao}}"
    ></dados-veiculo>

</div>

<script>
    export default {
        data () {
            return {
                marca: $carro->marca,
                modelo: $carro->modelo,
                ano: $carro->ano,
                placa: $carro->placa,
                categoria: $carro->categoria,
                preco: $carro->preco,
                cambio: $carro->cambio,
                quilometragem: $carro->quilometragem,
                motor: $carro->motor,
                portas: $carro->portas,
                combustivel: $carro->combustivel,
                cor: $carro->cor,
                descricao: $carro->descricao,
            }
        }
    }
</script>
@endsection
