<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Middleware;

use \App\Models\User;
use \Firebase\JWT\JWT;
use \Laravel\Lumen\Http\Request;

/**
 * Description of Autenticador
 *
 * @author deborah
 */
class Autenticador {
    
    public function handle(Request $request, \Closure $next)
    {
        try{
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception;
            }

            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutenticacao = JWT::decode($token, env('JWT_KEY'), ['HS256']);

            $user = User::where('email', $dadosAutenticacao->email)
                 ->first();

            if(is_null($user)){
                throw new \Exception;
            }
            
            return $next($request);
        } catch (\Exception $ex) {
            return response()->json('Não autorizado', 401);
        }
    }

}
