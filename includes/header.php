<?php require_once 'conexion.php'; ?> 
<?php require_once 'includes/helper.php'; ?>
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
            <?php
            $categorias = obtenerCategorias($db);
            if (!empty($categorias)):
            while ($categoria = mysqli_fetch_assoc($categorias)):?>
                <li><a href="categoria.php?id=<?= $categoria['ID'] ?>" ><?= $categoria['NOMBRE'] ?></a></li>
            <?php endwhile;
            endif;?>
            <li><a href="">Sobre nosotros</a></li>
            <li><a href="">Contacto</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>
