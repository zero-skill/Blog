<?php require_once './includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
<?php
$entrada_actual = obtenerEntrada($db, $_GET['id']);
if (!isset($entrada_actual['ID'])) {
    header("Location: index.php");
}
?>
<!---- CAJA PRINCIPAL --->     
<div id="principal">
    <h1>Editar Entradas</h1>
    <p>Edita tu entrada <?= $entrada_actual['TITULO'] ?>.</p>
    <br>
    <form action="insert-entrada.php?update=<?= $entrada_actual['ID'] ?>" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?= $entrada_actual['TITULO'] ?>"/>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'titulo') : ''; ?>
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" ><?= $entrada_actual['DESCRIPCION'] ?></textarea>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'descripcion') : ''; ?>
        <label for="categoria">Categoria</label>
        <?php echo isset($_SESSION['error-entrada']) ? mostrarError($_SESSION['error-entrada'], 'categoria') : ''; ?>
        <select name="categoria">
            <?php
            $categorias = obtenerCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <option value="<?= $categoria['ID'] ?>"
                            <?= ($categoria['ID'] == $entrada_actual['CATEGORIA_ID']) ? 'selected="selected"' : '' ?>>
                                <?= $categoria['NOMBRE'] ?>
                    </option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>

        <input type="submit" value="Guardar cambios"/>
    </form>
    <?php borrarError() ?>
</div>
<div class="clearfix"></div>
<?php require_once './includes/footer.php'; ?>