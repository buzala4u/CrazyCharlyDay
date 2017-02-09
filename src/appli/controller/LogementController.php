<?php

namespace appli\controller;
use appli\vue\VueLogement as VueLogement;

class LogementController {
    
    public function affichListeLog(){
        $v = new VueLogement();
        $html = $v->choixAffichage(1);
        return $html;
    }
}