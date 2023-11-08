<?php

namespace App;

class Talla extends ActiveRecord {

    protected static $tabla = 'tallas';
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