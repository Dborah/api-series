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
        return response()->json(Serie::create(['nome'=> $reques->nome]), 201);
    }
}


