<?php
require '../includes/app.php';
incluirTemplate('header');

use App\Talla;

$talla = new Talla;

$t9z = ['tallas' => [
    'nombre' => 'talla 9',
    'tipo' => 'zapato'
]];

$t10z = ['tallas' => [
    'nombre' => 'talla 10',
    'tipo' => 'zapato'
]];

$t11z = ['tallas' => [
    'nombre' => 'talla 11',
    'tipo' => 'zapato'
]];

$t12z = ['tallas' => [
    'nombre' => 'talla 12',
    'tipo' => 'zapato'
]];

$t12p5z = ['tallas' => [
    'nombre' => 'talla 12.5',
    'tipo' => 'zapato'
]];

$t13z = ['tallas' => [
    'nombre' => 'talla 13',
    'tipo' => 'zapato'
]];

$t14z = ['tallas' => [
    'nombre' => 'talla 14',
    'tipo' => 'zapato'
]];

$t15z = ['tallas' => [
    'nombre' => 'talla 15',
    'tipo' => 'zapato'
]];

$t15p5z = ['tallas' => [
    'nombre' => 'talla 15.5',
    'tipo' => 'zapato'
]];

$t16z = ['tallas' => [
    'nombre' => 'talla 16',
    'tipo' => 'zapato'
]];

$t17z = ['tallas' => [
    'nombre' => 'talla 17',
    'tipo' => 'zapato'
]];

$t18z = ['tallas' => [
    'nombre' => 'talla 18',
    'tipo' => 'zapato'
]];

$t18p5z = ['tallas' => [
    'nombre' => 'talla 18.5',
    'tipo' => 'zapato'
]];

$t19z = ['tallas' => [
    'nombre' => 'talla 19',
    'tipo' => 'zapato'
]];

$t19p5z = ['tallas' => [
    'nombre' => 'talla 19.5',
    'tipo' => 'zapato'
]];

$t20z = ['tallas' => [
    'nombre' => 'talla 20',
    'tipo' => 'zapato'
]];

$t20p5z = ['tallas' => [
    'nombre' => 'talla 20.5',
    'tipo' => 'zapato'
]];

$t21z = ['tallas' => [
    'nombre' => 'talla 21',
    'tipo' => 'zapato'
]];

$t21p5z = ['tallas' => [
    'nombre' => 'talla 21.5',
    'tipo' => 'zapato'
]];

$t22z = ['tallas' => [
    'nombre' => 'talla 22',
    'tipo' => 'zapato'
]];

$t22p5z = ['tallas' => [
    'nombre' => 'talla 22.5',
    'tipo' => 'zapato'
]];

$t23z = ['tallas' => [
    'nombre' => 'talla 23',
    'tipo' => 'zapato'
]];

$t23p5z = ['tallas' => [
    'nombre' => 'talla 23.5',
    'tipo' => 'zapato'
]];

$t24z = ['tallas' => [
    'nombre' => 'talla 24',
    'tipo' => 'zapato'
]];

$t24p5z = ['tallas' => [
    'nombre' => 'talla 24.5',
    'tipo' => 'zapato'
]];

$t25z = ['tallas' => [
    'nombre' => 'talla 25',
    'tipo' => 'zapato'
]];

$t25p5z = ['tallas' => [
    'nombre' => 'talla 25.5',
    'tipo' => 'zapato'
]];

$t26z = ['tallas' => [
    'nombre' => 'talla 26',
    'tipo' => 'zapato'
]];

$t26p5z = ['tallas' => [
    'nombre' => 'talla 26.5',
    'tipo' => 'zapato'
]];

$t27z = ['tallas' => [
    'nombre' => 'talla 27',
    'tipo' => 'zapato'
]];

$t27p5z = ['tallas' => [
    'nombre' => 'talla 27.5',
    'tipo' => 'zapato'
]];

$t28z = ['tallas' => [
    'nombre' => 'talla 28',
    'tipo' => 'zapato'
]];

$t28p5z = ['tallas' => [
    'nombre' => 'talla 28.5',
    'tipo' => 'zapato'
]];

$t29z = ['tallas' => [
    'nombre' => 'talla 29',
    'tipo' => 'zapato'
]];

$t29p5z = ['tallas' => [
    'nombre' => 'talla 29.5',
    'tipo' => 'zapato'
]];         

$t30z = ['tallas' => [
    'nombre' => 'talla 30',
    'tipo' => 'zapato'
]];

$t30p5z = ['tallas' => [
    'nombre' => 'talla 30.5',
    'tipo' => 'zapato'
]];

$t31z = ['tallas' => [
    'nombre' => 'talla 31',
    'tipo' => 'zapato'
]];

$t31p5z = ['tallas' => [
    'nombre' => 'talla 31.5',
    'tipo' => 'zapato'
]];

$t32z = ['tallas' => [
    'nombre' => 'talla 32',
    'tipo' => 'zapato'
]];

$t32p5z = ['tallas' => [
    'nombre' => 'talla 32.5',
    'tipo' => 'zapato'
]];

$t33z = ['tallas' => [
    'nombre' => 'talla 33',
    'tipo' => 'zapato'
]];

$t33p5z = ['tallas' => [
    'nombre' => 'talla 33.5',
    'tipo' => 'zapato'
]];

$t34z = ['tallas' => [
    'nombre' => 'talla 34',
    'tipo' => 'zapato'
]];

$t34p5z = ['tallas' => [
    'nombre' => 'talla 34.5',
    'tipo' => 'zapato'
]];

$tallaCalzado = [$t9z,$t10z,$t11z,$t12z,$t12p5z,$t13z,$t14z,$t15z,$t15p5z,$t16z,$t17z,$t18z,$t18p5z,$t19z,$t19p5z,$t20z,$t20p5z
,$t21z,$t21p5z,$t22z,$t22p5z,$t23z,$t23p5z,$t24z,$t24p5z,$t25z,$t25p5z,$t26z,$t26p5z,$t27z,$t27p5z,$t28z,$t28p5z,$t29z,$t29p5z
,$t30z,$t30p5z,$t31z,$t31p5z,$t32z,$t32p5z,$t33z,$t33p5z,$t34z,$t34p5z];

for($i = 0; $i < sizeof($tallaCalzado); $i ++) {
    $talla = new Talla($tallaCalzado[$i]['tallas']);
    $talla->guardar();
}

$texChc = ['tallas' => [
    'nombre' => 'talla extra chica',
    'tipo' => 'camisa'
]];

$tChc = ['tallas' => [
    'nombre' => 'talla chica',
    'tipo' => 'camisa'
]];

$tMc = ['tallas' => [
    'nombre' => 'talla Mediana',
    'tipo' => 'camisa'
]];

$tGc = ['tallas' => [
    'nombre' => 'talla Grande',
    'tipo' => 'camisa'
]];

$texGc = ['tallas' => [
    'nombre' => 'talla Extra Grande',
    'tipo' => 'camisa'
]];

$tallaCamisa = [$texChc,$tChc,$tMc,$tGc,$texGc];

for($i = 0; $i < sizeof($tallaCamisa); $i ++) {
    $talla = new Talla($tallaCamisa[$i]['tallas']);
    $talla->guardar();
}

?>


<?php
incluirTemplate('footer');
?>