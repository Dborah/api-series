<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use \App\Models\Episodio;
/**
 * Description of EpisodiosController
 *
 * @author deborah
 */
class EpisodiosController extends BaseController 
{
    public function __construct() {
        $this->classe = Episodio::class;
    }
    
    public function buscaPorSerie(int $serieId) {
        $episodios = Episodio::query()
                ->where('serie_id', $serieId)
                ->paginate();
        
        return $episodios;
    }
}


