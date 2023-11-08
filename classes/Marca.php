<?php

namespace App;

class Marca extends ActiveRecord {

    protected static $tabla = 'marcas';
    protected static $columnasDB = ['id','nombre','tipo'];

    public $id;
    public $nombre;
    public $tipo;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
    }

}