<!---- CAJA PRINCIPAL --->     
<div id="principal">
    <h1>Ultimas entradas</h1>
    <?php
    $entradas = obtenerUltimasEntradas($db);
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


    <div class="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div>
</div>
<div class="clearfix"></div>