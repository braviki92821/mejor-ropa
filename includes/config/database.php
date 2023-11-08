<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'password', 'comparador_ropa');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}