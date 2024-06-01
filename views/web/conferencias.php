<main class="agenda">
    <h2 class="agenda__heading">
        Workshops & Conferencias
    </h2>
    <p class="agenda__descripcion">Tallere y conferencias dictados por expertos en desarrollo web</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt;Conferencias/></h3>
        <p class="eventos__fecha">Lunes 27 - Mayo</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['conferencias_L'] as $evento) : ?>
                    <div class="evento swiper-slide">
                        <p class="evento__hora"><?php echo $evento->Hora->Hora ?></p>

                        <div class="evento__informacion">

                            <h4 class="evento__nombre"><?php echo $evento->Nombre ?></h4>

                            <div>
                                <p class="evento__introduccion"><?php echo $evento->Descripcion; ?></p>
                            </div>

                            <div class="evento__autor--info">
                                <?php
                                $imagePath = htmlspecialchars($_ENV['PROJECT_URL'] . '/img/speakers/' . $evento->Ponente->Imagen);
                                ?>
                                <picture>
                                    <source srcset="<?php echo $imagePath; ?>.webp" type="image/webp">
                                    <img class="evento__imagen-autor" src="<?php echo $imagePath; ?>.png" alt="Imagen de Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido; ?>
                                </p>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <p class="eventos__fecha">Martes 28 - Mayo</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['conferencias_M'] as $evento) : ?>
                    <div class="evento swiper-slide">
                        <p class="evento__hora"><?php echo $evento->Hora->Hora ?></p>
                        <div class="evento__informacion">

                            <h4 class="evento__nombre"><?php echo $evento->Nombre ?></h4>

                            <div>
                                <p class="evento__introduccion"><?php echo $evento->Descripcion; ?></p>
                            </div>

                            <div class="evento__autor--info">
                                <?php
                                $imagePath = htmlspecialchars($_ENV['PROJECT_URL'] . '/img/speakers/' . $evento->Ponente->Imagen);
                                ?>
                                <picture>
                                    <source srcset="<?php echo $imagePath; ?>.webp" type="image/webp">
                                    <img class="evento__imagen-autor" src="<?php echo $imagePath; ?>.png" alt="Imagen de Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido; ?>
                                </p>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <p class="eventos__fecha">Miercoles 29 - Mayo</p>

        <div class="eventos__listado">
            <?php foreach ($eventos['conferencias_Mi'] as $evento) : ?>
                <div class="evento">
                    <p class="evento__hora"><?php echo $evento->Hora->Hora ?></p>
                    <div class="evento__informacion">

                        <h4 class="evento__nombre"><?php echo $evento->Nombre ?></h4>

                        <div>
                            <p class="evento__introduccion"><?php echo $evento->Descripcion; ?></p>
                        </div>

                        <div class="evento__autor--info">
                            <?php
                            $imagePath = htmlspecialchars($_ENV['PROJECT_URL'] . '/img/speakers/' . $evento->Ponente->Imagen);
                            ?>
                            <picture>
                                <source srcset="<?php echo $imagePath; ?>.webp" type="image/webp">
                                <img class="evento__imagen-autor" src="<?php echo $imagePath; ?>.png" alt="Imagen de Ponente">
                            </picture>
                            <p class="evento__autor-nombre">
                                <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido; ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="eventos eventos--workshops">
        <h3 class="eventos__heading">&lt;WorkShops/></h3>
        <p class="eventos__fecha">Lunes 27 - Mayo</p>

        <div class="eventos__listado">
            <?php foreach ($eventos['workshops_L'] as $evento) : ?>
                <div class="evento">
                    <p class="evento__hora"><?php echo $evento->Hora->Hora ?></p>
                    <div class="evento__informacion">

                        <h4 class="evento__nombre"><?php echo $evento->Nombre ?></h4>

                        <div>
                            <p class="evento__introduccion"><?php echo $evento->Descripcion; ?></p>
                        </div>

                        <div class="evento__autor--info">
                            <?php
                            $imagePath = htmlspecialchars($_ENV['PROJECT_URL'] . '/img/speakers/' . $evento->Ponente->Imagen);
                            ?>
                            <picture>
                                <source srcset="<?php echo $imagePath; ?>.webp" type="image/webp">
                                <img class="evento__imagen-autor" src="<?php echo $imagePath; ?>.png" alt="Imagen de Ponente">
                            </picture>
                            <p class="evento__autor-nombre">
                                <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido; ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="eventos__fecha">Martes 28 - Mayo</p>

        <div class="eventos__listado">
            <?php foreach ($eventos['workshops_M'] as $evento) : ?>
                <div class="evento">
                    <p class="evento__hora"><?php echo $evento->Hora->Hora ?></p>
                    <div class="evento__informacion">

                        <h4 class="evento__nombre"><?php echo $evento->Nombre ?></h4>

                        <div>
                            <p class="evento__introduccion"><?php echo $evento->Descripcion; ?></p>
                        </div>

                        <div class="evento__autor--info">
                            <?php
                            $imagePath = htmlspecialchars($_ENV['PROJECT_URL'] . '/img/speakers/' . $evento->Ponente->Imagen);
                            ?>
                            <picture>
                                <source srcset="<?php echo $imagePath; ?>.webp" type="image/webp">
                                <img class="evento__imagen-autor" src="<?php echo $imagePath; ?>.png" alt="Imagen de Ponente">
                            </picture>
                            <p class="evento__autor-nombre">
                                <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido; ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="eventos__fecha">Miercoles 28 - Mayo</p>

        <div class="eventos__listado">
            <?php foreach ($eventos['workshops_Mi'] as $evento) : ?>
                <div class="evento">
                    <p class="evento__hora"><?php echo $evento->Hora->Hora ?></p>
                    <div class="evento__informacion">

                        <h4 class="evento__nombre"><?php echo $evento->Nombre ?></h4>

                        <div>
                            <p class="evento__introduccion"><?php echo $evento->Descripcion; ?></p>
                        </div>

                        <div class="evento__autor--info">
                            <?php
                            $imagePath = htmlspecialchars($_ENV['PROJECT_URL'] . '/img/speakers/' . $evento->Ponente->Imagen);
                            ?>
                            <picture>
                                <source srcset="<?php echo $imagePath; ?>.webp" type="image/webp">
                                <img class="evento__imagen-autor" src="<?php echo $imagePath; ?>.png" alt="Imagen de Ponente">
                            </picture>
                            <p class="evento__autor-nombre">
                                <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido; ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>