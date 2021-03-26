<?php include_once 'includes/helper.php'; ?>
<!---- BARRA LATERAL ---> 
<aside id="sidebar">
    <div id="login" class="block-aside">
        <h3>Inicia Sesión</h3>
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
        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <?php echo isset($_SESSION['error'])?mostrarError($_SESSION['error'], 'nombre'): ''?>
            
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos">
            <?php echo isset($_SESSION['error'])?mostrarError($_SESSION['error'], 'apellidos'):'' ?>

            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <?php echo isset($_SESSION['error'])?mostrarError($_SESSION['error'], 'email'):'' ?>

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php echo isset($_SESSION['error'])?mostrarError($_SESSION['error'], 'password'):'' ?>
            <input type="submit" value="Registrarse">
        </form>
        <?php borrarError()?>
    </div>
</aside>
