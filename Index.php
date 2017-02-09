<?php

/**
* Programme principal de l'application web
*/

require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;
use appli\controller\IndexController as Index;
use appli\controller\UtilisateurController as Utilisateur;

//creation de la connexion
$db = new DB();
$tab = parse_ini_file('src/ini/conf.ini');
$db->addConnection($tab);
$db->setAsGlobal();
$db->bootEloquent();
$slim = new \Slim\Slim();

$slim->get('/', function(){
    $c = new Index();
    $html = $c->affichIndex();
    echo $html;
});

$slim->get('UtilController/listeUtilisateurr', function(){
    $c = new Utilisateur();
    $html = $c->affichListeUtil();
    echo $html;
});

$slim->get('UtilController/utilisateur/$id', function($id){
   $c = new Utilisateur();
    $html = $c->affichUtil($id);
    echo $html;
});

$slim->run();