<?php

namespace Controller;

class IndexController {
    
    public function affichIndex(){
        $v = new Vue/IndexVue();
        $html = $v->afficher();
        return $html;
    }
}