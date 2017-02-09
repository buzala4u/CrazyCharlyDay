<?php

namespace appli\controller;

use appli\vue\IndexVue as IndexVue;

class IndexController {
    
    public function affichIndex(){
        $v = new IndexVue();
        $html = $v->afficher();
        return $html;
    }
}