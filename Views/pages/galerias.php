<?php include('templates/header.php') ?>

<main>
    <!-- Inicio: slider -->
    <section class="slider items-1">
        <h2 class="font-size-0">Imagem</h2>

        <div id="item-1" class="control-operator"></div>

        <section class="item bg3" id="banner-menor">
            <h3 class="font-size-0">Primeira imagem</h3>
        </section>
    </section>
    <!-- Fim: slider -->

    <!-- Inicio: galerias -->
    <section class="galerias">
        <h2 class="row-title">Galerias</h2>
        <div class="row-green"></div>

        <div class="capas">
            <div class="capa">
                <a href="<?= INCLUDE_PATH ?>galerias/lazer">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/box-lazer.jpg" alt="Galeria lazer">
                    <h3>Lazer</h3>
                </a>
            </div>

            <div class="capa">
                <a href="<?= INCLUDE_PATH ?>galerias/restaurante">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/box-restaurante.jpg" alt="Galeria restaurante">
                    <h3>Restaurante</h3>
                </a>
            </div>

            <div class="capa">
                <a href="<?= INCLUDE_PATH ?>galerias/paraquedismo">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/box-paraquedismo.jpg" alt="Galeria paraquedismo">
                    <h3>Paraquedismo</h3>
                </a>
            </div>

            <div class="capa">
                <a href="<?= INCLUDE_PATH ?>galerias/reveillon">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/box-reveillon.jpg" alt="Galeria reveillon 2019">
                    <h3>Reveillon</h3>
                </a>
            </div>
        </div>
    </section>
    <!-- Fim: galerias -->
</main>
