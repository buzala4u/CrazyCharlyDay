<?php

namespace appli\controller;

use appli\vue\IndexVue as IndexVue;
use Illuminate\Database\Capsule\Manager as DB;
$iniCo = parse_ini_file('src/ini/conf.ini');
try {
    $db = new DB();
    $db->addConnection([
        'driver' => $iniCo['driver'],
        'host' => $iniCo['host'],
        'database' => $iniCo['database'],
        'username' => $iniCo['username'],
        'password' => $iniCo['password'],
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ]);
}catch (\PDOException $e)
{
    throw new \PDOException("Connection: '$dsn'  ".$e);
}
$db->setAsGlobal();
$db->bootEloquent();
class IndexController{
    public static function affichIndex(){
        $v = new IndexVue();
        $html = $v->afficher();
        return $html;
    }
}