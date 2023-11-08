<?php

namespace App;

class Color extends ActiveRecord {

    protected static $tabla = 'color';
    protected static $columnasDB = ['id','nombre'];

    public $id;
    public $nombre;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
    }

    public function validar() {
        if (!$this->nombre) {
            self::$errores[] = "Debes colocar el nombre del color ";
        }

        return self::$errores;
    }

}