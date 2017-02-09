<?php

namespace appli\controller;

use appli\vue\IndexVue as IndexVue;
use Illuminate\Database\Capsule\Manager as DB;

class IndexController{
    public static function affichIndex(){
        $v = new IndexVue();
        $html = $v->afficher();
        return $html;
    }
}