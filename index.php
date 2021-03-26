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
        <link rel='icon' href='assets/img/favicon.ico' type='image/x-icon'/>
        <title>Blog de videojuegos</title>
    </head>
    <body>
        <?php require_once 'includes/header.php'; ?>

        <?php require_once 'includes/sidebar.php'; ?>
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



        <?php require_once 'includes/footer.php'; ?>
    </body>
</html>
