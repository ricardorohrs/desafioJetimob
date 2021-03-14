<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoController extends Controller {
    public function index() {

        /* VENDAS */
        //conta quantos carros foram vendidos
        $contVendido = DB::table('carros')->where('venda', '!=', '')->count();
        $contTotal = DB::table('carros')->count();
        $contTotal = $contTotal - $contVendido;

        return view('historico', ['contVendido' => $contVendido, 'contTotal' => $contTotal]);
    }
}
