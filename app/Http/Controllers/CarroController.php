<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use function GuzzleHttp\Promise\all;

class CarroController extends Controller
{
    public function salva_carro()
    {
        $carro = new Carro();
        $carro->marca = request()->marca;
        $carro->modelo = request()->modelo;
        $carro->ano = request()->ano;
        $carro->placa = request()->placa;
        $carro->categoria = request()->categoria;
        $carro->preco = request()->preco;
        $carro->save();

        return 'ok';
    }

    public function all_cars()
    {
        $carros = Carro::paginate(10);
        return response()->json($carros);
    }

    public function edit_carro($id)
    {
        $carro = Carro::find($id);
        return response()->json($carro);
    }

    public function update_carro()
    {
        $carro = Carro::find(request()->id);
        $carro->marca = request()->marca;
        $carro->modelo = request()->modelo;
        $carro->ano = request()->ano;
        $carro->placa = request()->placa;
        $carro->categoria = request()->categoria;
        $carro->preco = request()->preco;
        $carro->update();

        return 'ok';
    }

    public function delete_carro($id)
    {
        $carro = Carro::find($id)->delete();

        return 'ok';
    }
}
