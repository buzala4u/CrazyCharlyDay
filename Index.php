<?php

/**
* Programme principal de l'application web
*/


//on lance l'autoload
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;

//creation de la connexion
$db = new DB();
$tab = parse_ini_file('src/conf/conf.ini');
$db->addConnection($tab);
$db->setAsGlobal();
$db->bootEloquent();
$slim = new \Slim\Slim();

$slim->get('/', function(){
    $c = new IndexController();
    $html = $c->affichIndex();
    echo $html;
});

$slim->get('/Groupe', function(){
    $c = new GroupeController();
    $html = $c->créerGroupe();
    echo $html;
});

$slim->run();