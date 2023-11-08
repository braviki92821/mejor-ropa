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


    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if (!$this->genero) {
            self::$errores[] = "Debes seleccionar un genero";
        }

        if (!$this->imagen) {
            self::$errores[] = 'La Imagen es Obligatoria';
        }

        if (!$this->precio) {
            self::$errores[] = 'El Precio es Obligatorio';
        }

        if (!$this->tallaId) {
            self::$errores[] = 'Seleccione una talla';
        }

        if (!$this->colorId) {
            self::$errores[] = 'Seleccione un color';
        }

        if (!$this->marcaId) {
            self::$errores[] = 'Seleccione una marca';
        }

        if (!$this->tallaId) {
            self::$errores[] = 'Seleccione una tienda';
        }

        return self::$errores;
    }
}