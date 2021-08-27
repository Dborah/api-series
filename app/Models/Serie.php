<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

/**
 * Description of Serie
 *
 * @author deborah
 */
class Serie extends Model 
{
    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $perPage = 3;


    public function episodios()
    {
        return $this->hasMany(Episodio::class);
        
    }

}
