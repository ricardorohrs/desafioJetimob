<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use Intervention\Image\Facades\Image;

class CarroController extends Controller
{

    public function salva_carro(Request $request)
    {
        $this->validarDados();

        $carro = new Carro();
        $carro->marca = request()->marca;
        $carro->modelo = request()->modelo;
        $carro->ano = request()->ano;
        $carro->placa = request()->placa;
        $carro->categoria = request()->categoria;
        $carro->preco = request()->preco;
        $carro->descricao = request()->descricao;
        $carro->image = request()->image;

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

    public function validarDados()
    {
        return tap(request()->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|integer|min:0|max:2021',
            'categoria' => 'required',
            'preco' => 'required',
        ]), function () {
            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000',
                ]);
            }
        });
    }
}
