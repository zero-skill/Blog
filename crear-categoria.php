
<?php require_once './includes/redirect.php'; ?>
<?php require_once './includes/header.php'; ?>
<?php require_once './includes/sidebar.php'; ?>
<!---- CAJA PRINCIPAL --->     
<div id="principal">
    <h1>Crear categorías</h1>
    <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas
        al crear sus entradas.</p>
    <br>
    <form action="insert-categoria.php" method="post">
        <label for="nombre">Nombre de la categoría</label>
        <input type="text" name="nombre"/>
        <?php echo isset($_SESSION['error-categoria']) ? mostrarError($_SESSION['error-categoria'], 'nombre') : ''; ?>

        <input type="submit" value="Guardar"/>
    </form>
    <?php borrarError() ?>

</div>
<div class="clearfix"></div>
<?php require_once './includes/footer.php'; ?>

