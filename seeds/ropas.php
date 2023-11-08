<?php

require '../includes/app.php';
incluirTemplate('header');

use App\Ropa;

$ropa = new Ropa;

$camisa = [ 'ropa' => [
    'titulo' => 'Camisa Polo azul xd',
    'genero' => 'H',
    'tipo' => 'camisa',
    'imagen' => '1253592-1.jpg',
    'precio' => '153.05',
    'tallaId' => '46',
    'colorId' => '2',
    'marcaId' => '8',
    'tiendaId' => '2'
] ];

$ropa = new Ropa($camisa['ropa']);
$ropa->guardar();