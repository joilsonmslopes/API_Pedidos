<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();

        return $pedidos;
    }
    
}
