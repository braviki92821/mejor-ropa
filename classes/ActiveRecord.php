<?php

namespace App;

class ActiveRecord {

    protected static $db;
    protected static $columnasDB = [];

    protected static $tabla = '';

    protected static $errores = [];

    public static function setDB($database) {
        self::$db = $database;
    }

    public function atributos() {
        $datos = [];
        foreach(static::$columnasDB as $columna):
         if($columna === 'id') continue;
         $datos[$columna] = $this->$columna;
        endforeach;
 
        return $datos;
    }

    public function sanitizarDatos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value):
            $sanitizado[$key] = self::$db->escape_string($value);
        endforeach;

        return $sanitizado;
    }

    public static function getErrores() {
        return static::$errores;
    }

    public function validar() {
        static::$errores = [];
        return static::$errores;
    }

    public static function consultarSQL($query) {

        $resultado = self::$db->query($query);

        $array = [];

        while($registro = $resultado->fetch_assoc()):
            $array[] = static::crearObjeto($registro);
        endwhile;

        $resultado->free();

        return $array;

    }

    protected static function crearObjeto($registro) {
        $objeto = new static;

        foreach($registro as $key => $value):
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        endforeach;

        return $objeto;
    }

    public function sincronizar($args = []) {
        foreach($args as $key => $value):
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        endforeach;
    }

    public function setImagen($imagen) {
        
        if(!is_null($this->id)){
            $this->borrarImagen();
        }   
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    public function borrarImagen() {

        $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
        if($existeArchivo){
            unlink(CARPETA_IMAGENES . $this->imagen);
        }

    }

    public static function all() {
        $query = "SELECT * FROM " . static::$tabla;

        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    public function guardar() {
        if(!is_null($this->id)){
            $this->actualizar();
        }else{
            $this->crear();
        }
    }

    public function crear() {

        $datos = $this->sanitizarDatos();

        $query = " INSERT INTO " . static::$tabla . " (";
        $query.= join(', ', array_keys($datos));
        $query.= " ) VALUES ('";
        $query.= join("', '", array_values($datos));
        $query.= "') ";

        //debuguear($query);

        $resultado = self::$db->query($query);

        if($resultado) {
            header('location: /comparador-ropa/admin/?query=todo');
            //header('location: /comparador-ropa/admin/?query=todo&resultado=1');
        }

    }

    public function actualizar() {
        $datos = $this->sanitizarDatos();

        $valores = [];

        foreach($datos as $key => $value):
            $valores[] = "{$key} = '{$value}'";
        endforeach;

        $query = " UPDATE " . static::$tabla . " SET ";
        $query.= join(', ',$valores);
        $query.= " WHERE id = '" . self::$db->escape_string($this->id) . "'";
        $query.= " LIMIT 1 ";

        $resultado = self::$db->query($query);

        if($resultado) {
            header('location: /comparador-ropa/admin/?query=todo');
        //  header('location: /comparador-ropa/admin/?query=todo&resultado=2');
        }
    }

    public function eliminar() {
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);

        if($resultado) {
            $this->borrarImagen();
            header('location: /comparador-ropa/admin/?query=todo');
        //     header('location: /comparador-ropa/admin/?query=todo&resultado=3');
        }

    }

    public function tipo($tipo){
        $query = "SELECT * FROM " . static::$tabla . " WHERE tipo = '" . $tipo. "' ";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = $id";

        $resultado = self::consultarSQL($query);

        return array_shift($resultado);
    }

    
}