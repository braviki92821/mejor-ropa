<?php

namespace App;

class Ropa extends ActiveRecord {

    protected static $tabla = 'ropa';
    protected static $columnasDB = ['id','titulo','genero','tipo','imagen','precio','tallaId','colorId','marcaId','tiendaId'];

    public $id;
    public $titulo;
    public $genero;
    public $tipo;
    public $imagen;
    public $precio;
    public $tallaId;
    public $colorId;
    public $marcaId;
    public $tiendaId;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->genero = $args['genero'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->tallaId = $args['tallaId'] ?? '';
        $this->colorId = $args['colorId'] ?? '';
        $this->marcaId = $args['marcaId'] ?? '';
        $this->tiendaId = $args['tiendaId'] ?? '';
    }



}