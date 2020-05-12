<main>
    <div id="modal" class="dn">
        <div id="modal-controlls">
            <div id="prev" onclick="prevPhoto()">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div id="next" onclick="nextPhoto()">
                <i class="fas fa-arrow-right"></i>
            </div>
            <div id="close" onclick="closePhoto()">
                X
            </div>
        </div>
        <img class="dn" id="photo00" alt="Foto paraquedismo">
        <img class="dn" id="photo01" alt="Foto paraquedismo">
        <img class="dn" id="photo02" alt="Foto paraquedismo">
        <img class="dn" id="photo03" alt="Foto paraquedismo">
        <img class="dn" id="photo04" alt="Foto paraquedismo">
        <img class="dn" id="photo05" alt="Foto paraquedismo">
        <img class="dn" id="photo06" alt="Foto paraquedismo">
        <img class="dn" id="photo07" alt="Foto paraquedismo">
        <img class="dn" id="photo08" alt="Foto paraquedismo">
        <img class="dn" id="photo09" alt="Foto paraquedismo">
        <img class="dn" id="photo10" alt="Foto paraquedismo">
        <img class="dn" id="photo11" alt="Foto paraquedismo">
    </div>
    <!-- Inicio: galerias -->
    <section class="galerias">
        <h2 class="row-title">Paraquedismo</h2>
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
                    <img onclick="openPhoto('00')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-00.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo01">
                    <img onclick="openPhoto('01')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-01.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo02">
                    <img onclick="openPhoto('02')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-02.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo03">
                    <img onclick="openPhoto('03')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-03.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo04">
                    <img onclick="openPhoto('04')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-04.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo05">
                    <img onclick="openPhoto('05')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-05.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo06">
                    <img onclick="openPhoto('06')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-06.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo07">
                    <img onclick="openPhoto('07')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-07.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo08">
                    <img onclick="openPhoto('08')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-08.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo09">
                    <img onclick="openPhoto('09')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-09.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo10">
                    <img onclick="openPhoto('10')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-10.jpg" alt="Foto paraquedismo">
                </a>
            </div>
            <div class="capa">
                <a href="#photo11">
                    <img onclick="openPhoto('11')" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_paraquedismo-11.jpg" alt="Foto paraquedismo">
                </a>
            </div>
        </div>
    </section>
    <!-- Fim: galerias -->
</main>

