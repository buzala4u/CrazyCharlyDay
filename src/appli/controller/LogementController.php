<?php

namespace appli\controller;
use appli\vue\VueLogement as VueLogement;

class IndexLogement {
    public function affichIndex(){
        $v = new VueLogement();
        $html = $v->afficher();
        return $html;
    }
}