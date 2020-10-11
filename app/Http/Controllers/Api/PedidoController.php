<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        try {
        $pedidos = Pedido::all();

        return $pedidos;
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao tentar mostrar todos os pedidos', 'details'=>$error];

        }
    }


    public function show($id)
    {
        try {
            $pedido = Pedido::find($id);

            return $pedido;
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao tentar mostrar pedido', 'details'=>$error];
        }
    }

    public function store(Request $request)
    {
        try {
            $pedido = new Pedido;

            $pedido->cliente = $request->cliente;
            $pedido->quantidade = $request->quantidade;
            $pedido->prato_id = $request->prato_id;
            $pedido->status_id = $request->status_id;

            $pedido->save();

            return ['retorno'=>'Pedido realizado com sucesso'];
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao tentar realizar um pedido', 'details'=>$error];
        }
    }
}
