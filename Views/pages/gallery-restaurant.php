<?php include('templates/header.php') ?>

<main class="container">
    <section id="gallery" class="container-sm">
        <div class="title-separator">
            <h2>Restaurante</h2>

            <a href="<?= INCLUDE_PATH ?>">
                <span>⬅</span>
                <h3>Voltar</h3>
            </a>
        </div>

        <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-00.jpg" alt="Foto restaurante" id="restaurante-00">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-01.jpg" alt="Foto restaurante" id="restaurante-01">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-02.jpg" alt="Foto restaurante" id="restaurante-02">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-03.jpg" alt="Foto restaurante" id="restaurante-03">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-04.jpg" alt="Foto restaurante" id="restaurante-04">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-05.jpg" alt="Foto restaurante" id="restaurante-05">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-06.jpg" alt="Foto restaurante" id="restaurante-06">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-07.jpg" alt="Foto restaurante" id="restaurante-07">
            <img src="<?= INCLUDE_PATH_FULL ?>img/restaurante-08.jpg" alt="Foto restaurante" id="restaurante-08">
        </a>
    </section>
</main>
