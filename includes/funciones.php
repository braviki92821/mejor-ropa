<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES',__DIR__ . '/../imagenes/');


function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";

    exit;
}

function incluirTemplate( string $nombre) {
    include TEMPLATES_URL . "/$nombre.php"; 
}

function s ($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function estaAutenticado() {
    session_start();

    if(!$_SESSION['login']) {
        header('Location: /bienesraices');
    }
}


