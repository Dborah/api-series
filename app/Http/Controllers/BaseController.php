<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
/**
 * Description of BaseController
 *
 * @author deborah
 */
abstract class BaseController
{
    protected $classe; 
    
    public function index() {
        return $this->classe::all();
    }
    
    public function store(Request $reques) 
    {
        return response()->json($this->classe::create($reques->all()), 201);
    }
    
    public function show(int $id) 
    {
        $recurso = $this->classe::find($id);
        
        if(is_null($recurso)){
            return response()->json('', 204);
        }
        return response()->json($recurso, 200);
    }
    
    public function update(int $id, Request $request) 
    {
        $recurso = $this->classe::find($id);
        
        if(is_null($recurso)){
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        $recurso->fill($request->all());
        $recurso->save();
        
        return $recurso;
    }
    
    public function destroy(int $id) 
    {
        $qtdRecursosRemovidos = $this->classe::destroy($id);
        
        if($qtdRecursosRemovidos === 0){
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        return response()->json('', 204);
        
    }
}


