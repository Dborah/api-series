<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use \App\Models\Serie;
/**
 * Description of SeriesController
 *
 * @author deborah
 */
class SeriesController extends BaseController
{
   public function __construct() {
        $this->classe = Serie::class;
    }

}


