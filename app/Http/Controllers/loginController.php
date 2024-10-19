<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(request $request)
    {
        $dados = json_decode($request->getContent(), true);

        $email = $dados['email'];
        $senha = $dados['senha'];
        $local = $dados['local'];

       $id_cliente = DB::select("SELECT id_cliente FROM clientes where email='$email' AND senha='$senha'");
        
       if (!empty($id_cliente)) {
            $cliente = $id_cliente[0];
            $cookie_name = "login";
            $cookie_value = $cliente->id_cliente;
            $cookie_expire = time() + (86400);
            setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); 
            
            if ($local == 'dialogLogin') {
                return response()->json([
                    'status' => 1
                ]);
            } else {
                return view('welcome');
            }
       } else {
            $mensagem = "Usuário ou senha inválido";
            if ($local == 'dialogLogin') {
                return response()->json([
                    'mensagem' => $mensagem,
                    'status' => 0
                ]);
            } else {
                return redirect()->back()->with('mensagem', $mensagem)->withInput();
            }
       }
        // return view('pag.login');
    }
}
