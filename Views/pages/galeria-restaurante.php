    <main>
        <div id="modal" class="dn" onclick="closePhoto()">
            <img class="dn" id="photo00" alt="Foto do restaurante">
            <img class="dn" id="photo01" alt="Foto do restaurante">
            <img class="dn" id="photo02" alt="Foto do restaurante">
            <img class="dn" id="photo03" alt="Foto do restaurante">
            <img class="dn" id="photo04" alt="Foto do restaurante">
            <img class="dn" id="photo05" alt="Foto do restaurante">
            <img class="dn" id="photo06" alt="Foto do restaurante">
            <img class="dn" id="photo07" alt="Foto do restaurante">
            <img class="dn" id="photo08" alt="Foto do restaurante">
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
                    <a href="#photo00">
                        <img onclick="openPhoto('00')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-00.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo01">
                        <img onclick="openPhoto('01')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-01.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo02">
                        <img onclick="openPhoto('02')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-02.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo03">
                        <img onclick="openPhoto('03')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-03.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo04">
                        <img onclick="openPhoto('04')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-04.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo05">
                        <img onclick="openPhoto('05')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-05.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo06">
                        <img onclick="openPhoto('06')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-06.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo07">
                        <img onclick="openPhoto('07')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-07.jpg" alt="Foto restaurante">
                    </a>
                </div>
                <div class="capa">
                    <a href="#photo08">
                        <img onclick="openPhoto('08')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_restaurante-08.jpg" alt="Foto restaurante">
                    </a>
                </div>
            </div>
        </section>
        <!-- Fim: galerias -->
    </main>

