<?php

namespace appli\controller;
use appli\vue\VueLogement as VueLogement;

class LogementController {
    
    public function affichIndex(){
        $v = new VueLogement();
        $html = $v->afficher();
        return $html;
    }
}