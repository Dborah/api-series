<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use \App\Models\Serie;
use \Illuminate\Http\Request;
/**
 * Description of SeriesController
 *
 * @author deborah
 */
class SeriesController 
{
    public function index() {
        return Serie::all();
    }
    
    public function store(Request $reques) 
    {
        return response()->json(Serie::create($reques->all()), 201);
    }
    
    public function show(int $id) 
    {
        $serie = Serie::find($id);
        
        if(is_null($serie)){
            return response()->json('', 204);
        }
        return response()->json($serie, 200);
    }
    
    public function update(int $id, Request $request) 
    {
        $serie = Serie::find($id);
        
        if(is_null($serie)){
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        $serie->fill($request->all());
        $serie->save();
        return $serie;
    }
}


