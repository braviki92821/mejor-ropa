<?php

use App\Ropa;
use App\Color;
use App\Marca;
use App\Talla;
use App\Tienda;
use Intervention\Image\ImageManagerStatic as Image;

require '../../includes/app.php';

$ropa = new Ropa;
$talla = new Talla;
$marca = new Marca;

$colores = Color::all();
$tiendas = Tienda::all();
$errores = Ropa::getErrores();

$nuevo = $_GET['nuevo'] ?? 'camisa';


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
    

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ropa = new Ropa($_POST['ropa']);

    // Crear carpeta
    
    // Generar un nombre único
    $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

    if($_FILES['ropa']['tmp_name']['imagen']){
        $image = Image::make($_FILES['ropa']['tmp_name']['imagen'])->fit(800,600);  
        $ropa->setImagen($nombreImagen);
    }

    $errores = $ropa->validar();

    if(empty($errores)) {

        /** SUBIDA DE ARCHIVOS */

        if(!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
        }

        // Subir la imagen

        $image->save(CARPETA_IMAGENES . $nombreImagen);

        $resultado = $ropa->guardar();
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

        <form class="formulario" method="POST" action="/comparador-ropa/admin/ropa/añadir.php?nuevo=<?php echo $nuevo; ?>" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_ropa.php' ?>
            <input type="submit" value="Añadir Ropa" class="boton boton-verde">
        </form> 

</main>

<?php
incluirTemplate('footer');
?>