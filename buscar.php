<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
<?php
if (!isset($_POST['busqueda'])) {
    header("Location: index.php");
}
?>

<div id="principal">

    <h1>Busqueda: <?= $_POST['busqueda'] ?></h1>
    <?php
    $entradas = obtenerEntradas($db, NULL, NULL, $_POST['busqueda']);
    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1):
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>        
            <article class="entrada">
                <a href="entrada-completa.php?id=<?= $entrada['ID'] ?>">
                    <h2><?= $entrada['TITULO'] ?></h2>
                    <span class="entrada-fecha"><?= $entrada['CATEGORIA'] . ' | ' . $entrada['FECHA'] ?></span>
                    <p>
                        <?= substr($entrada['DESCRIPCION'], 0, 265) . ' ...' ?>
                    </p>
                </a>
            </article>
            <?php
        endwhile;
    else:
        ?>
        <div class="alerta">No hay resultados para esta busqueda</div>
    <?php endif; ?>
</div>
<div class="clearfix"></div>
<?php require_once 'includes/footer.php'; ?>