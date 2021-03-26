<!---- BARRA LATERAL ---> 
<aside id="sidebar">
    <div id="login" class="block-aside">
        <h3>Inicia Sesión</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="block-aside">
        <h3>Regístrate</h3>
        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Registrarse">
        </form>
    </div>
</aside>
