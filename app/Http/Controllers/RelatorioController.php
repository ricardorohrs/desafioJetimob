<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
    {
        $marca = Carro::selectRaw(['marca', 'count(*)'])->groupBy('marca')->get();

        dd($marca);

        return response()->json([
            'marca' => $marca,
        ]);
    }
}
