<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

/**
 * Description of Episodio
 *
 * @author deborah
 */
class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    
    public function serie() 
    {
        return $this->belongsTo(Serie::class);
    }
    
    public function getAssistidoAttribute($assistido): bool 
    {
        return $assistido;
        
    }
}
