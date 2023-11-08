<?php

require '../includes/app.php';
incluirTemplate('header');

use App\Ropa;
use App\Color;
use App\Marca;

$ropa = new Ropa;
$marca = new Marca;

$colores = Color::all();
$marcas = Marca::all();

$getRopa = $ropa->sanitizarDatos();
$getMarca = $marca->sanitizarDatos();

$ropas = $ropa->innerJoin($getRopa,$getMarca,'marcas');

debuguear($ropas);