<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use \App\Models\User;
use \Illuminate\Support\Facades\Hash;

/**
 * Description of TokenController
 *
 * @author deborah
 */
class TokenController extends Controller
{
    
    public function gerarToken(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email', 
            'password' => 'required'
        ]);
        
        $usuario = User::where('email', $request->email)->first();
        
        if(is_null($usuario) || !Hash::check($request->password, $usuario->password)){
            return response()->json('Usuário ou senhas inválidos', 401);
        }
        
        $token = JWT::encode(
            ['email' => $request->email],
            env('JWT_KEY')
        );
        
        return [
            'access_token' => $token
        ];
        
    }
}
