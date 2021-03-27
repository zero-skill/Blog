<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
<div id="principal">
    <h1>Todas las entradas</h1>
    <?php
    $entradas = obtenerEntradas($db,TRUE);
    if (!empty($entradas)):
        while ($entrada = mysqli_fetch_assoc($entradas)): ?>        
            <article class="entrada">
                <a href="">
                    <h2><?= $entrada['TITULO'] ?></h2>
                    <span class="entrada-fecha"><?= $entrada['CATEGORIA'] . ' | ' . $entrada['FECHA'] ?></span>
                    <p>
                        <?= substr($entrada['DESCRIPCION'], 0, 265) . ' ...' ?>
                    </p>
                </a>
            </article>
            <?php
        endwhile;
    endif;
    ?>

</div>
<div class="clearfix"></div>
<?php require_once 'includes/footer.php'; ?>

