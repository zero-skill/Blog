<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
<?php
$entrada_actual = obtenerEntrada($db, $_GET['id']);
if (!isset($entrada_actual['ID'])) {
    header("Location: index.php");
}
?>

<div id="principal">

    <h1><?= $entrada_actual['TITULO'] ?></h1>
    <a href="categoria.php?id=<?= $entrada_actual['CATEGORIA_ID'] ?>"<h2>
            <?= $entrada_actual['CATEGORIA'] ?></h2>
    </a>
    <h4><?= $entrada_actual['FECHA'] ?> | <?=$entrada_actual['USUARIO']?></h4>
    <p><?= $entrada_actual['DESCRIPCION'] ?></p>

    <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['ID']==$entrada_actual['USUARIO_ID']): ?>
            <a href="update-entrada.php" class="boton boton-naranja boton-entrada">Editar Entrada</a>
            <a href="delete-entrada.php" class="boton boton-rojo boton-entrada">Borrar Entrada</a>
    <?php endif;?>


</div>
<div class="clearfix"></div>
<?php require_once 'includes/footer.php'; ?>