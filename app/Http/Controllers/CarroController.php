<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

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
}
