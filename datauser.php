
<?php require_once './includes/redirect.php'; ?>
<?php require_once './includes/header.php'; ?>
<?php require_once './includes/sidebar.php'; ?>
<div id="principal">
    <h1>Mis datos</h1>
    <?php if (isset($_SESSION['update_usuario_completado'])): ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['update_usuario_completado']; ?>
        </div>
    <?php elseif (isset($_SESSION['error']['update_usuario'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['error']['update_usuario']; ?>
        </div>
    <?php endif; ?>
    <form action="update-user.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?=$_SESSION['usuario']['NOMBRE']?>">
        <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'nombre') : '' ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" value="<?=$_SESSION['usuario']['APELLIDOS']?>">
        <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'apellidos') : '' ?>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=$_SESSION['usuario']['EMAIL']?>">
        <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'email') : '' ?>

        <input type="submit" value="Guardar cambios">
    </form>
    <?php borrarError() ?>

</div>
<div class="clearfix"></div>
<?php require_once './includes/footer.php'; ?>