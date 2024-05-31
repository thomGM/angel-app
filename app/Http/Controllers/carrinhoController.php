<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\log;

use Illuminate\Http\Request;

class carrinhoController extends Controller
{
    public function adicionar(request $request) {
        Log::info('carrinho');
        $id_roupa = $request->input('id_roupa');
        Log::info('id_roupa');
        Log::info($id_roupa);

        return view('pag.carrinho', compact('id_roupa'));
    }
}
