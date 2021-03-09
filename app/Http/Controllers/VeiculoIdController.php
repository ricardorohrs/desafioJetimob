<?php

namespace App\Http\Controllers;

use App\Models\Carro;

class VeiculoIdController extends Controller
{
    public function show($id) {

        $carro = Carro::findOrFail($id);
        return view('veiculos.show', ['carro' => $carro]);
    }
}
