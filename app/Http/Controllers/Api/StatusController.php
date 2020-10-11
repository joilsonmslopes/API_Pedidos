<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Status;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();

        return $status;
    }

    public function show($id)
    {
        try {
            $status = Status::find($id);

            return $status;
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao listar', 'details'=>$error];
        }
    }

    public function store(Request $request)
    {
        try {
            $status = new Status;

            $status->nome = $request->nome;

            $status->save();

            return ['retorno'=>'Status cadastrado com sucesso'];
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao cadastrar', 'details'=>$error];
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $status = Status::find($id);

            $status->nome = $request->nome;

            $status->save();

            return ['retorno'=>'Status atualizado com sucesso', 'data'=>$status];

        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao tentar atualizar o status', 'details'=>$error];
        }
    }

    public function destroy($id)
    {
        try {
            $status = Status::find($id);

            $status->delete();

            return ['retorno'=>'Status deletado com sucesso'];
        } catch (\Exception $error) {
            return ['retorno'=>'Falha ao tentar deletar o status', 'details'=>$error];
        }
    }
}
