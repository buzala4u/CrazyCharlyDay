<?php

namespace appli\controller;

use appli\vue\UtilisateurVue as UtilVue;

class UtilisateurController {
    
    public function affichListUtil(){
        $v = new UtilVue();
        $html = $v->choixAffichage(1);
        return $html;
    }
    
    public function affichUtil($id){
        $v = new UtilVue();
        $html = $v->choixAffichage(2, $id);
        return $html;
    }
}