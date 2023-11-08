<?php
require '../includes/app.php';
incluirTemplate('header');

use App\Tienda;

$tienda = new Tienda;

$coopel = ['tiendas' => [
    'nombre' => 'Coopel'
]];
            
$shein = ['tiendas' => [
    'nombre' => 'Shein'
]];

$liverpool = ['tiendas' => [
    'nombre' => 'Liverpool'
]];

$perro = ['tiendas' => [
    'nombre' => 'Cuidado con el perro'
]];

$Sanborns = ['tiendas' => [
    'nombre' => 'Sanborns'
]];

$walmart = ['tiendas' => [
    'nombre' => 'Walmart'
]];

$sams = ['tiendas' => [
    'nombre' => "Sam's club"
]];

$tiendas = [$coopel, $shein, $liverpool, $perro, $Sanborns, $walmart, $sams];



for($i = 0; $i < sizeof($tiendas); $i ++){
    $tienda = new Tienda($tiendas[$i]['tiendas']);
    $tienda->guardar();
}

?>


<?php
incluirTemplate('footer');
?>