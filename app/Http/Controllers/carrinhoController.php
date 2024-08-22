<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\log;

use Illuminate\Http\Request;

class carrinhoController extends Controller
{
    public function adicionar(request $request) {
            $id_cliente = $_COOKIE['login'];

            $roupas = DB::select("SELECT r.descricao, r.valor, c.tamanho, c.cor, c.id_carrinho FROM carrinho c
                                left join roupas r on r.id_roupa = c.id_roupa
                                where c.id_cadastro = $id_cliente");

            return view('pag.carrinho', compact('roupas'));
    }

    public function verifyLogin(request $request) {
        
        if (isset($_COOKIE['login'])) {
            
            $id_roupa = $request->input('id_roupa');
            $tamanho = $request->input('tamanho');
            $cor = $request->input('cor');
            $id_cliente = $_COOKIE['login'];

            DB::insert("INSERT INTO carrinho (cor, id_cadastro, id_roupa, tamanho) values (?,?,?,?)",
            ["$cor", "$id_cliente", "$id_roupa", "$tamanho"]);

            $data = ["status" => 1, "messagem" => $_COOKIE['login']];
        } else {
            $data = ["status" => 0, "messagem" => 'Não foi encontrado Login'];
        }

        return response()->json($data);
    }

    public function exluir(request $request) {
        
        if(!empty($request->input('id'))) {
            $id = $request->input('id');
            
        } else {
            return response()->json(["status"=> 0, "messagem"=> "Não foi possível excluir, contate nosso suporte"]);
        }
    }
}
