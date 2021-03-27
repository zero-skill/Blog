<?php require_once './includes/redirect.php'; ?>
<?php require_once './includes/header.php'; ?>
<?php require_once './includes/sidebar.php'; ?>
<!---- CAJA PRINCIPAL --->     
<div id="principal">
    <h1>Crear Entradas</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas
        y disfrutar de todo el contenido.</p>
    <br>
    <form action="insert-entrada.php" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo"/>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'titulo') : ''; ?>
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'descripcion') : ''; ?>
        <label for="categoria">Categoria</label>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'categoria') : ''; ?>
        <select name="categoria">
            <?php
            $categorias = obtenerCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <option value="<?= $categoria['ID'] ?>">
                        <?= $categoria['NOMBRE'] ?>
                    </option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'titulo') : ''; ?>

        <input type="submit" value="Guardar"/>
    </form>
    <?php borrarError()?>
</div>
<div class="clearfix"></div>
<?php require_once './includes/footer.php'; ?>