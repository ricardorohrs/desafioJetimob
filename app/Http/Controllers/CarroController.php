<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function salva_carro(Request $request)
    {

        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|integer|min:0|max:2021',
            'categoria' => 'required',
            'preco' => 'required',
        ]);

        $carro = new Carro();
        $carro->marca = request()->marca;
        $carro->modelo = request()->modelo;
        $carro->ano = request()->ano;
        $carro->placa = request()->placa;
        $carro->categoria = request()->categoria;
        $carro->preco = request()->preco;
        $carro->descricao = request()->descricao;
//        $carro->image_path = request()->image_path;
        $carro->save();
    }

    public function all_cars()
    {
        $carros = Carro::paginate(10);
        return response()->json($carros);
    }

    public function edit_carro($id)
    {
        $carro = Carro::findOrFail($id);
        return response()->json($carro);
    }

    public function update_carro()
    {
        $carro = Carro::findOrFail(request()->id);
        $carro->marca = request()->marca;
        $carro->modelo = request()->modelo;
        $carro->ano = request()->ano;
        $carro->placa = request()->placa;
        $carro->categoria = request()->categoria;
        $carro->preco = request()->preco;
        $carro->update();
    }

    public function delete_carro($id)
    {
        $carro = Carro::findOrFail($id)->delete();
    }
}
