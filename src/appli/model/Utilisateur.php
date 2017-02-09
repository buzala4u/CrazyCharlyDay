<?php

require_once 'vendor/illuminate/database/Eloquent/Model.php';
use Illuminate\Database\Eloquent\Model as Model;

class Utilisateur extends Model {
    
    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;
}