<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<div class="dashboard__contenedor--boton">
    <a href="/admin/eventos" class="dashboard__boton">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php 
        include_once __DIR__ . '/../../templates/alertas.php';
    ?>

    <form method="post" enctype="multipart/form-data" class="formulario">
    <?php 
        include_once __DIR__ . '/formulario.php';
    ?>

        <input type="submit" value="Actualizar Ponente" class="formulario__submit formulario__submit--registrar">
    </form>

</div>

<?php 
    $script = "
    <script src=\"/build/js/date.js\"></script>
    <script src=\"/build/js/ponentes.js\"></script>
"
?>