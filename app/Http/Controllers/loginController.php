<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(request $request)
    {
       $senha = $request->input('senha');
       $email = $request->input('email');

       $id_cliente = DB::select("SELECT id_cliente FROM clientes where email='$email' AND senha='$senha'");

       if (!empty($id_cliente)) {

       } else {
            $mensagem = "Usuário ou senha inválido";
            return redirect()->back()->with('mensagem', $mensagem)->withInput();
       }
        // return view('pag.login');
    }
}
