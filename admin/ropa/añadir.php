<?php
require '../../includes/app.php';

use App\Ropa;
use App\Color;
use App\Marca;
use App\Talla;
use App\Tienda;
use Intervention\Image\ImageManagerStatic as Image;

$ropa = new Ropa;
$talla = new Talla;
$marca = new Marca;

$colores = Color::all();
$tiendas = Tienda::all();

$nuevo = $_GET['nuevo'] ?? 'camisa';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     if ($_GET['nuevo'] == null) {
         header('Location: /comparador-ropa/admin/ropa/añadir.php?nuevo=camisa');
    }

    if($nuevo == 'camisa'){
        $tallas = $talla->tipo('camisa');
        $marcas = $marca->tipo('camisa');
    } else if($nuevo == 'pantalon'){
        $tallas = $talla->tipo('pantalon');
        $marcas = $marca->tipo('pantalon');    
    } else if($nuevo == 'calzado'){
        $tallas = $talla->tipo('calzado');
        $marcas = $marca->tipo('calzado');    
    }
    
 }

incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/comparador-ropa/admin/?query=todo" class="boton boton-verde">Volver</a>

     <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/comparador-ropa/admin/ropa/añadir.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_ropa.php' ?>
            <input type="submit" value="Añadir Ropa" class="boton boton-verde">
        </form> 

</main>

<?php
incluirTemplate('footer');
?>