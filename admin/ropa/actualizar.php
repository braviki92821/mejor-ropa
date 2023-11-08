<?php

    use App\Ropa;
    use App\Color;
    use App\Marca;
    use App\Talla;
    use App\Tienda;
    use Intervention\Image\ImageManagerStatic as Image;

    require '../../includes/app.php';

    $talla = new Talla;
    $marca = new Marca;

    $errores = Ropa::getErrores();
    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $nuevo = $_GET['nuevo'] ?? 'camisa';

    if(!$id) {
        header('Location: /comparador-ropa/admin/?query=todo');
    }

    $colores = Color::all();
    $tiendas = Tienda::all();
    $ropa = Ropa::find($id);

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

    $errores = Ropa::getErrores();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $args = $_POST['ropa'];
        $ropa->sincronizar($args);

        $errores = $ropa->validar();

        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

        if($_FILES['ropa']['tmp_name']['imagen']){
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);  
            $ropa->setImagen($nombreImagen);
        }

        if(empty($errores)) {

            if($_FILES['ropa']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }

            $ropa->guardar();
        }
    }

    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar</h1>

    <a href="/comparador-ropa/admin/?query=todo" class="boton boton-verde">Volver</a>

     <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/comparador-ropa/admin/ropa/actualizar.php?id=<?php echo $id ?>&nuevo=<?php echo $nuevo; ?>" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_ropa.php' ?>
            <input type="submit" value="Actualizar Ropa" class="boton boton-verde">
        </form> 

</main>

<?php 
    incluirTemplate('footer');
?> 