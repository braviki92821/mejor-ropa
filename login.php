<?php
    require 'includes/app.php';
    incluirTemplate('header');

    use App\Usuario;

    $usuario = new Usuario;
    $errores = Usuario::getErrores();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $usuario = new Usuario($_POST['usuario']);

        $errores = $usuario->validarLogin();

        if(empty($errores)){
            $resultado = $usuario->existeUsuario();
            
                
            if( !$resultado ) {
                $errores = Usuario::getErrores();
            } else {

                $usuario->comprobarPassword($resultado);
                //debuguear($usuario->tipo);
                if($usuario->autenticado) {
                   $usuario->autenticar($usuario->tipo);
                } else {
                    $errores = Usuario::getErrores();
                }
            }
        }
    }

?>


<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" novalidate>
        <div class="border border-dark">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="usuario[correo]" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" name="usuario[password]" placeholder="Tu Password" id="password">
            </fieldset>
            <fieldset>
                <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
            </fieldset>
        </div>
    </form>
</main>

<?php
incluirTemplate('footer');
?>