    <main>
        <div id="modal" class="dn" onclick="closePhoto()">
            <img class="dn" id="photo1" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-00.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo2" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-01.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo3" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-02.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo4" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-03.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo5" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-04.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo6" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-05.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo7" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-06.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo8" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-07.jpg" alt="Foto do restaurante">
            <img class="dn" id="photo9" src="<?= INCLUDE_PATH_FULL ?>img/restaurante-08.jpg" alt="Foto do restaurante">
        </div>
        <!-- Inicio: galerias -->
        <section class="galerias">
            <h2 class="row-title">Restaurante</h2>
            <div class="row-green"></div>
            <div class="voltar">
            <a href="<?= INCLUDE_PATH ?>galerias">
                <i class="fas fa-long-arrow-alt-left"></i>
                <h3>Voltar</h3>
            </a>
            </div>

            <div class="capas">
                <div class="capa">
                    <a href="#photo1">
                        <img onclick="openPhoto(1)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-00.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo2">
                        <img onclick="openPhoto(2)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-01.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo3">
                        <img onclick="openPhoto(3)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-02.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo4">
                        <img onclick="openPhoto(4)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-03.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo5">
                        <img onclick="openPhoto(5)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-04.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo6">
                        <img onclick="openPhoto(6)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-05.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo7">
                        <img onclick="openPhoto(7)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-06.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo8">
                        <img onclick="openPhoto(8)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-07.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo9">
                        <img onclick="openPhoto(9)" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-08.jpg" alt="Foto restaurante">
                    </a>
                </div>
            </div>
        </section>
        <!-- Fim: galerias -->
    </main>

