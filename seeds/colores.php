<?php
require '../includes/app.php';
incluirTemplate('header');

use App\Color;

$color = new Color;

$amarillo = ['color' => [
    'nombre' => 'amarillo'
]];
            
$morado = ['color' => [
    'nombre' => 'morado'
]];

$rosa = ['color' => [
    'nombre' => 'rosa'
]];

$negro = ['color' => [
    'nombre' => 'negro'
]];

$gris = ['color' => [
    'nombre' => 'gris'
]];

$cafe = ['color' => [
    'nombre' => 'cafe'
]];

$verde = ['color' => [
    'nombre' => 'verde'
]];

$colores = [
    $amarillo,
    $morado,
    $rosa,
    $negro,
    $gris,
    $cafe,
    $verde
];



for($i = 0; $i < sizeof($colores); $i ++){
    $color = new Color($colores[$i]['color']);
    $color->guardar();
}

?>


<?php
incluirTemplate('footer');
?>