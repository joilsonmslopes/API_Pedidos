<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Prato;

class PratoController extends Controller
{
    public function index()
    {
        $pratos = Prato::all();

        return $pratos;
    }

    public function store(Request $request)
    {
        try {
            $prato = new Prato;

            $prato->nome = $request->nome;
            $prato->serve_pessoas = $request->serve_pessoas;
            $prato->valor = $request->valor;

            $prato->save();

            return ['retorno'=>'Prato cadastrado com sucesso'];
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao cadastrar novo prato', 'details'=>$error];
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $prato = Prato::find($id);

            $prato->nome = $request->nome;
            $prato->serve_pessoas = $request->serve_pessoas;
            $prato->valor = $request->valor;

            $prato->save();

            return ['retorno'=>'Prato atualizado com sucesso', 'data'=>$prato];
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao atualizar prato', 'details'=>$error];
        }
    }
}
