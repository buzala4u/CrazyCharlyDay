<?php

namespace appli\controller;
use appli\vue\GroupeVue as GroupeVue;

class GroupeController {
    
    public function creerGroupe(){
        //Modofier base
    }
    
    public function afficheDetailGroupe($id){
        $v = new UtilVue();
        $html = $v->choixAffichage(2, $id);
        return $html;
    }
}