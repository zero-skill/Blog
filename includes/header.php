<?php require_once 'conexion.php'; ?> 
<?php require_once 'helper.php'; ?>
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
        <!---- HEADER --->
        <header id="header">
            <!--    - LOGO -
            <div id="logo">
                <a href="index.php">Blog</a>
            </div>-->
            <!---- MENU ---> 

            <nav id="nav">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <?php
                    $categorias = obtenerCategorias($db);
                    if (!empty($categorias)):
                        while ($categoria = mysqli_fetch_assoc($categorias)):
                            ?>
                            <li><a href="categoria.php?id=<?= $categoria['ID'] ?>" ><?= $categoria['NOMBRE'] ?></a></li>
                            <?php
                        endwhile;
                    endif;
                    ?>
                    <li><a href="">Sobre nosotros</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
<div id="container">