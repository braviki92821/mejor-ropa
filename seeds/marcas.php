<?php
require '../includes/app.php';
incluirTemplate('header');

use App\Marca;

$marca = new Marca;

$levis = ['marcas' => [
    'nombre' => "Levi's",
    'tipo' => 'Pantalon'
]];

$calvin = ['marcas' => [
    'nombre' => "Calvin Klein",
    'tipo' => 'Pantalon'
]];

$oggi = ['marcas' => [
    'nombre' => "Oggi",
    'tipo' => 'Pantalon'
]];
      
$zara = ['marcas' => [
    'nombre' => "Zara",
    'tipo' => 'Pantalon'
]];

$HM = ['marcas' => [
    'nombre' => "H&M",
    'tipo' => 'Pantalon'
]];

$Polo = ['marcas' => [
    'nombre' => "Polo",
    'tipo' => 'Pantalon'
]];

$ferrioni = ['marcas' => [
    'nombre' => "Ferrioni",
    'tipo' => 'Pantalon'
]];

$lacoste = ['marcas' => [
    'nombre' => "Lacoste",
    'tipo' => 'Pantalon'
]];

$nike = ['marcas' => [
    'nombre' => "Nike",
    'tipo' => 'zapato'
]];

$adidas = ['marcas' => [
    'nombre' => "Adidas",
    'tipo' => 'zapato'
]];

$lacostez = ['marcas' => [
    'nombre' => "Lacoste",
    'tipo' => 'zapato'
]];

$wilson = ['marcas' => [
    'nombre' => "Wilson",
    'tipo' => 'zapato'
]];

$converse = ['marcas' => [
    'nombre' => "Converse",
    'tipo' => 'zapato'
]];

$americanPolo = ['marcas' => [
    'nombre' => "American Polo",
    'tipo' => 'zapato'
]];

$calvinz = ['marcas' => [
    'nombre' => "Calvin Klein",
    'tipo' => 'Zapato'
]];

$beenClass = ['marcas' => [
    'nombre' => "Been Class",
    'tipo' => 'Zapato'
]];

$calvinc = ['marcas' => [
    'nombre' => "Calvin Klein",
    'tipo' => 'Camisa'
]];

$ferrionic = ['marcas' => [
    'nombre' => "Ferrioni",
    'tipo' => 'Camisa'
]];

$americaneagle = ['marcas' => [
    'nombre' => "American Eagle",
    'tipo' => 'Camisa'
]];

$adidasc = ['marcas' => [
    'nombre' => "Adidas",
    'tipo' => 'Camisa'
]];

$marcas= [$levis,$lacoste,$lacostez,$calvin,$calvinc,$calvinz,$adidas,$adidasc,$americaneagle,$americanPolo
        ,$beenClass,$ferrioni,$ferrionic,$converse,$HM,$nike,$oggi,$Polo,$zara,$wilson];



for($i = 0; $i < sizeof($marcas); $i ++){
    $marca = new Marca($marcas[$i]['marcas']);
    $marca->guardar();
}

?>


<?php
incluirTemplate('footer');
?>