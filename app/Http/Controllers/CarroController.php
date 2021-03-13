<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Carro;
use Illuminate\Support\Facades\DB;
class CarroController extends Controller {

    public function store (Request $request) {

        $this->validarDados();

        $carro = new Carro();
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->placa = $request->placa;
        $carro->categoria = $request->categoria;
        $carro->preco = $request->preco;
        $carro->descricao = $request->descricao;
        $carro->cor = $request->cor;
        $carro->quilometragem = $request->quilometragem;
        $carro->cambio = $request->cambio;
        $carro->combustivel = $request->combustivel;
        $carro->portas = $request->portas;
        $carro->motor = $request->motor;
        $carro->venda = $request->venda;

        if ($carro->descricao == '') {
            $carro->descricao = "Não informado";
        } elseif ($carro->cor == '') {
            $carro->cor = "Não informado";
        } elseif ($carro->cambio == '') {
            $carro->cambio = "Não informado";
        } elseif ($carro->combustivel == '') {
            $carro->combustivel = "Não informado";
        } elseif ($carro->quilometragem == '') {
            $carro->quilometragem = "Não informado";
        } elseif ($carro->portas == '') {
            $carro->portas = "Não informado";
        } elseif ($carro->motor == '') {
            $carro->motor = "Não informado";
        } elseif ($carro->placa == '') {
            $carro->placa = "Não informado";
        }

        $carro->save();
    }

    public function index () {

        $carros = Carro::paginate(10);
        return response()->json($carros);
    }

    public function edit ($id) {

        $carro = Carro::findOrFail($id);
        return response()->json($carro);
    }

    public function update (Request $request) {

        $carro = Carro::findOrFail($request->id);
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->placa = $request->placa;
        $carro->categoria = $request->categoria;
        $carro->preco = $request->preco;
        $carro->update();
    }

    public function destroy ($id) {

        $carro = Carro::findOrFail($id)->delete();
    }

    public function show($id) {

        $carro = Carro::findOrFail($id);
        return view('veiculos.show', ['carro' => $carro]);
    }

    public function validarDados() {

        return tap(request()->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|integer|min:0|max:2021',
            'categoria' => 'required',
            'preco' => 'required',
            'quilometragem' => 'required',
            'cor' => 'required',
            'portas' => 'required',
            'motor' => 'required',
            'cambio' => 'required',
            'combustivel' => 'required',
        ]), function () {
            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000',
                ]);
            }
        });
    }

    public function marcaVenda($id){
        $carro = Carro::findOrFail($id);
        $carro->venda = Carbon::now();
        $carro->update();
    }

    public function search(Request $request) {
        $carros = DB::table('carros')->where('marca', 'like', '%' . $request->get('keywords') . '%')->get();
        return response()->json($carros);
    }

}
