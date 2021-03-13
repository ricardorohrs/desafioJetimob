<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    public function index() {

        /* CATEGORIA */
        //conta quantos carros são novos
        $contNovo = DB::table('carros')->where('categoria', '=', 'Novo')->count();

        //conta quantos carros são seminovos
        $contSemi = DB::table('carros')->where('categoria', '=', 'Seminovo')->count();

        //conta quantos carros são usados
        $contUsado = DB::table('carros')->where('categoria', '=', 'Usado')->count();

        /* COMBUSTIVEL */
        // conta quantos carros usam gasolina
        $contGasol = DB::table('carros')->where('combustivel', '=', 'Gasolina')->count();

        // conta quantos carros usam etanol
        $contEtanol = DB::table('carros')->where('combustivel', '=', 'Etanol')->count();

        // conta quantos carros usam diesel
        $contDiesel = DB::table('carros')->where('combustivel', '=', 'Diesel')->count();

        // conta quantos carros são flex
        $contFlex = DB::table('carros')->where('combustivel', '=', 'Flex')->count();

        // conta quantos carros usam GNV
        $contGNV = DB::table('carros')->where('combustivel', '=', 'GNV')->count();

        /* CÂMBIO */
        // conta quantos carros são automáticos
        $contAutom = DB::table('carros')->where('cambio', '=', 'Automático')->count();

        // conta quantos carros são manuais
        $contManual = DB::table('carros')->where('cambio', '=', 'Manual')->count();

        return view('relatorios', [
            'contNovo' => $contNovo, 'contSemi' => $contSemi, 'contUsado' => $contUsado,
            'contGasol' => $contGasol, 'contEtanol' => $contEtanol, 'contDiesel' => $contDiesel, 'contFlex' => $contFlex, 'contGNV' => $contGNV,
            'contAutom' => $contAutom, 'contManual' => $contManual
        ]);
    }
}
