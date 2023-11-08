<fieldset>
    <legend>Información General</legend>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="ropa[titulo]" placeholder="Titulo ropa" value="<?php echo s($ropa->titulo); ?>">
    
    <label for="genero">Ropa de:</label>
    <select name="ropa[genero]">
        <option value="">-- Seleccione --</option>
        <option value="H">Hombre</option>
        <option value="M">Mujer</option>
    </select>

    <input type="hidden" name="ropa[tipo]" value="<?php echo $nuevo ?>">

    <?php if($ropa->imagen): ?>
        <img src="/comparador-ropa/imagenes/<?php echo $ropa->imagen ?>" class="imagen-small">
    <?php endif; ?>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="ropa[imagen]">

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="ropa[precio]" placeholder="Precio Propiedad" value="<?php echo s($ropa->precio); ?>">

</fieldset>

<fieldset>
    <legend>Detalles de ropa</legend>

    <label for="talla">Talla:</label>
    <select name="ropa[tallaId]">
        <option value="">-- Seleccione --</option>
        <?php foreach($tallas as $talla) : ?>
            <option <?php echo $ropa->tallaId === $talla->id ? 'selected' : ''; ?> value="<?php echo s($talla->id); ?>"> <?php echo $talla->nombre?> </option>
        <?php endforeach; ?>
    </select>

    <!-- <label for="color">Color:</label>
    <select name="ropa[colorId]">
        <option value="">-- Seleccione --</option>
        <?php foreach($vendedores as $vendedor) : ?>
            <option <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?> value="<?php echo s($vendedor->id); ?>"> <?php echo $vendedor->nombre . " " . $vendedor->apellido; ?> </option>
        <?php endforeach; ?>
    </select>

    <label for="marca">Marca:</label>
    <select name="ropa[marcaId]">
        <option value="">-- Seleccione --</option>
        <?php foreach($vendedores as $vendedor) : ?>
            <option <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?> value="<?php echo s($vendedor->id); ?>"> <?php echo $vendedor->nombre . " " . $vendedor->apellido; ?> </option>
        <?php endforeach; ?>
    </select>

    <label for="tienda">Tienda:</label>
    <select name="ropa[tiendaId]">
        <option value="">-- Seleccione --</option>
        <?php foreach($vendedores as $vendedor) : ?>
            <option <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?> value="<?php echo s($vendedor->id); ?>"> <?php echo $vendedor->nombre . " " . $vendedor->apellido; ?> </option>
        <?php endforeach; ?>
    </select> -->
</fieldset>
