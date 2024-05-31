<?php

namespace App\Http\Controllers;

use App\Models\Roupas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class roupasController extends Controller
{
    public function roupas(request $request) {
        if($request->hasFile('foto')) {
            $arquivo = $_FILES['foto'];

            if($arquivo['error']) {
                $mensagem = "Erro ao salvar a imagem.";
                return redirect()->back()->with('mensagem', $mensagem)->withInput();
            }

            $nomeDoArquivo = $arquivo['name'];
            $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

            //strtolower - converte para letras minusculas
            //pathinfo - vai pegar a extensao do arquivo 
        
            if($extensao != "jpg" && $extensao != "png"){
                $mensagem = "Tipo de arquivo invalido.";
                return redirect()->back()->with('mensagem', $mensagem)->withInput();
            }

            $nome_id = uniqid();
            $fileNameToStore= $nome_id . "." . $extensao;

            $path = $request->file('foto')->storeAs('public/img', $fileNameToStore);

            $modulo = $request->input('modulo');
            $tipo = $request->input('tipo');
            $descricao = $request->input('texto');
            $cor = $request->input('cor');
            $cores = implode(",", $cor);
            $genero = $request->input('genero');
            $tamanhos = $request->input('tamanho');
            $tamanho = implode(",", $tamanhos);
            $quantidade = $request->input('quantidade');
            $descricaoDetalhada = $request->input('textoDetalhado');
            $valor = $request->input('valor');


            DB::insert('INSERT into roupas (modulo, tipo, descricao, img, cores, genero, quantidade, tamanho, descricaoDetalhada, valor) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ["$modulo", "$tipo", "$descricao", "$fileNameToStore", "'{$cores}'", "$genero", "$quantidade", "'{$tamanho}'", "$descricaoDetalhada", "'{$valor}'"]);


        }
    }

    public function femininoCamisas() {
       
       //$roupas = DB::select('select * from roupas where tipo = ? and modulo = ? and genero = ?', [1, 1, 1]);
       $roupas = Roupas::get();
       //$roupas = "teste";
       // dd($roupas);
       // Log::info( $roupas);
 
       return view('pag.femininoCamisas', compact('roupas'));
    }

    public function compra($id) {
        $data = Roupas::where('id_roupa', $id)
                ->get();
        return view('pag.compra', compact('data'));
    }

}