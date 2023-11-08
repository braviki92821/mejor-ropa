<?php

namespace App;

class Usuario extends ActiveRecord {

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','apellido','correo','password','tallaCamisaId','tallaPantalonId','tallaCalzadoId','colorId','tipo'];

    public $id;
    public $nombre;
    public $apellido;
    public $correo;
    public $password;
    public $tallaCamisaId;
    public $tallaPantalonId;
    public $tallaCalzadoId;
    public $colorId;
    public $tipo;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->tallaCamisaId = $args['tallaCamisaId'] ?? '';
        $this->tallaPantalonId = $args['tallaPantalonId'] ?? '';
        $this->tallaCalzadoId = $args['tallaCalzadoId'] ?? '';
        $this->colorId = $args['colorId'] ?? '';
        $this->tipo = $args['tipo'] ?? ''; 
    }

    public function validarLogin() {
        if(!$this->correo) {
            self::$errores[] = "El Email del usuario es obligatorio";
        }
        if(!$this->password) {
            self::$errores[] = "El Password del usuario es obligatorio";
        }
        return self::$errores;
    }

    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE correo = '" . $this->correo . "' LIMIT 1";
        $resultado = self::$db->query($query);

        if(!$resultado->num_rows) {
            self::$errores[] = 'El Usuario No Existe';
            return;
        }

        return $resultado;
    }

    public function comprobarPassword($resultado) {
        $usuario = $resultado->fetch_object();
        $this->autenticado = password_verify( $this->password, $usuario->password );
        $this->tipo = $usuario->tipo;
        if(!$this->autenticado) {
            self::$errores[] = 'El Password es Incorrecto';
            return;
        }

    }

    public function autenticar($tipo) {
        // El usuario esta autenticado
        session_start();

        // Llenar el arreglo de la sesión
        $_SESSION['usuario'] = $this->correo;
        $_SESSION['tipo'] = $this->tipo;
        $_SESSION['login'] = true;

        if($tipo == "administrador") {
            header('Location: /comparador-ropa/admin?query=todo');
        }else if($tipo == "usuario") {
            header('Location: /comparador-ropa/');
        }

        
   }

   public static function logout() {
    session_start();
    $_SESSION = [];
    header('Location: /');
    }
}