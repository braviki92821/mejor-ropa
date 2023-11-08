<?php
require '../includes/app.php';

Use App\Ropa;

$ropa = new Ropa;

$query = $_GET['query'] ?? 'todo';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  
    if( $_GET['query'] == null )
        header('Location: /comparador-ropa/admin/?query=todo');

    if($query == 'todo'){
        $ropas = Ropa::all();
    } else if($query == 'camisa'){
        $ropas = $ropa->tipo('camisa');
    } else if($query == 'pantalon'){
        $ropas = $ropa->tipo('pantalon');
    } else if($query == 'calzado'){
        $ropas = $ropa->tipo('calzado');
    }

}

incluirTemplate('header');
?>

<main class="contenedor seccion">
        <h1>Administrador de Mejor Ropa</h1>
         
        <?php if($query != 'todo'): ?>
            <a href="/comparador-ropa/admin/?query=todo" class="boton boton-azul">Ver todo</a>
            <a href="/comparador-ropa/admin/ropa/añadir.php?nuevo=<?php echo $query ?>" class="boton boton-verde">Agregar <?php echo $query ?></a>
        <?php endif; ?>

        <a href="/comparador-ropa/admin/?query=camisa" class="boton boton-azul">Ver Camisas</a>
        <a href="/comparador-ropa/admin/?query=pantalon" class="boton boton-azul">Ver Pantalones</a>
        <a href="/comparador-ropa/admin/?query=calzado" class="boton boton-azul">Ver Tenis / Zapatos</a>

        <?php if($query == 'todo'):  ?>
            <h2>Ropas</h2>
            <?php include '../includes/templates/tablaRopa.php'?>
        <?php endif; ?>

        <?php if($query == 'camisa'):  ?>
            <h2>Camisas, Blusas</h2>
            <?php include '../includes/templates/tablaRopa.php'?>
        <?php endif; ?>

        <?php if($query == 'pantalon'):  ?>
            <h2>Pantalones, Jeans</h2>
            <?php include '../includes/templates/tablaRopa.php'?>
        <?php endif; ?>

        <?php if($query == 'calzado'):  ?>
            <h2>Tenis, Zapatos</h2>
            <?php include '../includes/templates/tablaRopa.php'?>
        <?php endif; ?>

    </main>

<?php
   
   incluirTemplate('footer');
?>