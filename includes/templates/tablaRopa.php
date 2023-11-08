<table class="propiedades">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody> <!-- Mostrar los Resultados -->
        <?php foreach ($ropas as $ropa) : ?>
            <tr>
                <td><?php echo $ropa->id; ?></td>
                <td><?php echo $ropa->titulo; ?></td>
                <td> <img src="/comparador-ropa/imagenes/<?php echo $ropa->imagen; ?>" class="imagen-tabla"> </td>
                <td>$ <?php echo $ropa->precio; ?></td>
                <td>
                    <form method="POST" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $ropa->id; ?>">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>

                    <a href="/comparador-ropa/admin/ropa/actualizar.php?id=<?php echo $ropa->id; ?>&nuevo=<?php echo $ropa->tipo; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>