<?php

namespace App;

class Tienda extends ActiveRecord {

    protected static $tabla = 'tiendas';
    protected static $columnasDB = ['id','nombre'];

    public $id;
    public $nombre;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
    }

}