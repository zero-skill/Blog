<!---- BARRA LATERAL ---> 
<aside id="sidebar">
    <?php if (isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="block-aside">
            <h3>Bienvenido, <?= $_SESSION['usuario']['NOMBRE'] . ' ' . $_SESSION['usuario']['APELLIDOS'] ?></h3>
            <!--- BOTONES --->
            <a href="crear-entrada.php" class="boton boton-verde">Crear entradas</a>
            <a href="crear-categoria.php" class="boton">Crear categoría</a>
            <a href="logout.php" class="boton boton-naranja">Mis datos</a>
            <a href="logout.php" class="boton boton-rojo">Cerrar sesión</a>
        </div>
    <?php endif; ?>
    <?php if (!isset($_SESSION['usuario'])): ?>
    <div id="login" class="block-aside">
        <h3>Inicia Sesión</h3>
        <?php if (isset($_SESSION['error_login'])): ?>
            <div  class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Entrar" name="submit">
        </form>
    </div>

    <div id="register" class="block-aside">
        <h3>Regístrate</h3>
        <!--- MOSTRAR ERRORES --->
        <?php if (isset($_SESSION['registro_completado'])): ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['registro_completado']; ?>
            </div>
        <?php elseif (isset($_SESSION['error']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error']['general']; ?>
            </div>
        <?php endif; ?>
        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'nombre') : '' ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos">
            <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'apellidos') : '' ?>

            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'email') : '' ?>

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php echo isset($_SESSION['error']) ? mostrarError($_SESSION['error'], 'password') : '' ?>
            <input type="submit" value="Registrarse">
        </form>
        <?php borrarError() ?>
    </div>
    <?php endif;?>
</aside>
