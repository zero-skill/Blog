<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <title>Blog de videojuegos</title>
    </head>
    <body>
        <!---- HEADER --->
        <header id="header">
            <!--- LOGO --->
            <div id="logo">
                <a href="index.php">Blog de videojuegos</a>
            </div>
            <!---- MENU ---> 
            <nav id="nav">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Categoria 1</a></li>
                    <li><a href="">Categoria 2</a></li>
                    <li><a href="">Categoria 3</a></li>
                    <li><a href="">Categoria 4 </a></li>
                    <li><a href="">Sobre nosotros</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>

        <div id="container">
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
            <!---- CAJA PRINCIPAL --->     
            <div id="principal">
                <h1>Ultimas entradas</h1>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis urna urna, a dignissim lectus rhoncus nec.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis urna urna, a dignissim lectus rhoncus nec.                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis urna urna, a dignissim lectus rhoncus nec.                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis urna urna, a dignissim lectus rhoncus nec.                        </p>
                    </a>
                </article>
                <div class="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>

        <!---- FOOTER --->
        <footer id="footer">
            <p>
                Desarrollado por Gabriel Amaya &copy; 2021
            </p>
        </footer>
    </body>
</html>
