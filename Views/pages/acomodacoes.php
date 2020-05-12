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
            <img class="dn" id="photo00" alt="Foto acomodação">
            <img class="dn" id="photo01" alt="Foto acomodação">
            <img class="dn" id="photo02" alt="Foto acomodação">
            <img class="dn" id="photo03" alt="Foto acomodação">
            <img class="dn" id="photo04" alt="Foto acomodação">
            <img class="dn" id="photo05" alt="Foto acomodação">
            <img class="dn" id="photo06" alt="Foto acomodação">
            <img class="dn" id="photo07" alt="Foto acomodação">
            <img class="dn" id="photo08" alt="Foto acomodação">
            <img class="dn" id="photo09" alt="Foto acomodação">
            <img class="dn" id="photo10" alt="Foto acomodação">
            <img class="dn" id="photo11" alt="Foto acomodação">
            <img class="dn" id="photo12" alt="Foto acomodação">
            <img class="dn" id="photo13" alt="Foto acomodação">
            <img class="dn" id="photo14" alt="Foto acomodação">
            <img class="dn" id="photo15" alt="Foto acomodação">
            <img class="dn" id="photo16" alt="Foto acomodação">
            <img class="dn" id="photo17" alt="Foto acomodação">
            <img class="dn" id="photo18" alt="Foto acomodação">
            <img class="dn" id="photo19" alt="Foto acomodação">
            <img class="dn" id="photo20" alt="Foto acomodação">
            <img class="dn" id="photo21" alt="Foto acomodação">
            <img class="dn" id="photo22" alt="Foto acomodação">
            <img class="dn" id="photo23" alt="Foto acomodação">
            <img class="dn" id="photo24" alt="Foto acomodação">
            <img class="dn" id="photo25" alt="Foto acomodação">
            <img class="dn" id="photo26" alt="Foto acomodação">
            <img class="dn" id="photo27" alt="Foto acomodação">
            <img class="dn" id="photo28" alt="Foto acomodação">
            <img class="dn" id="photo29" alt="Foto acomodação">
            <img class="dn" id="photo30" alt="Foto acomodação">
        </div>
        <!-- Inicio: slider -->
        <section class="slider items-1">
            <h2 class="font-size-0">Banner</h2>

            <div id="item-1" class="control-operator"></div>

            <section class="item bg2" id="banner-menor">
                <h3 class="font-size-0">Acomodações</h3>
            </section>
        </section>
        <!-- Fim: slider -->

        <!-- Inicio: acomodacoes -->
        <section class="acomodacoes">
            <h2 class="row-title">Acomodações</h2>
            <div class="row-green"></div>

            <div class="acomodacao">
                <div class="descricao">
                    <h3>Apartamento grande</h3>
                    <div class="capa foto">
                        <a href="#photo00">
                            <img onclick="openPhoto('00')" class="photo" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_ap-grande-01.jpg" alt="Apartamento grande">
                        </a>
                    </div>
                    <p>
                        Acomodação projetada para comportar até 05 pessoas, em 01 cama de casal,
                        01 cama de solteiro e 01 bi-cama, com ar-condicionado, ventilador, geladeira, fogão,
                        sala de estar, e banheiro privativo. São as acomodações de número 01 à 12.
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i>Ar-condicionado</li>
                        <li><i class="fas fa-check"></i>Ventilador</li>
                        <li><i class="fas fa-check"></i>Televisão</li>
                        <li><i class="fas fa-check"></i>Geladeira</li>
                        <li><i class="fas fa-check"></i>Fogão</li>
                        <li><i class="fas fa-check"></i>Sala de estar</li>
                        <li><i class="fas fa-check"></i>Banheiro privativo</li>
                    </ul>
                </div>
            </div>

            <div class="acomodacao">
                <div class="descricao">
                    <h3>Apartamento pequeno</h3>
                    <div class="capa foto">
                        <a href="#photo01">
                            <img onclick="openPhoto('05')" class="photo" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_ap-pequeno-01.jpg" alt="Apartamento pequeno">
                        </a>
                    </div>
                    <p>
                        Acomodação projetada para comportar até 03 pessoas, em 01 cama de casal e
                        01 cama de solteiro, com ar-condicionado, frigobar, fogão, varanda,
                        e banheiro privativo. São as acomodações de número 13 à 18.
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i>Ar-condicionado</li>
                        <li><i class="fas fa-check"></i>Televisão</li>
                        <li><i class="fas fa-check"></i>Frigobar</li>
                        <li><i class="fas fa-check"></i>Fogão</li>
                        <li><i class="fas fa-check"></i>Banheiro privativo</li>
                    </ul>
                </div>
            </div>

            <div class="acomodacao">
                <div class="descricao">
                    <h3>Apartamento família</h3>
                    <div class="capa foto">
                        <a href="#photo02">
                            <img onclick="openPhoto('10')" class="photo" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_ap-familia-01.jpg" alt="Apartamento família">
                        </a>
                    </div>
                    <p>
                        Acomodação projetada para comportar até 06 pessoas, em 02 cama de casal e
                        02 camas de solteiro distribuídas em 02 quartos, com ar-condicionado, geladeira,
                        fogão, e banheiro privativo. Corresponde à acomodação de número 19.
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i>Ar-condicionado</li>
                        <li><i class="fas fa-check"></i>Televisão</li>
                        <li><i class="fas fa-check"></i>Geladeira</li>
                        <li><i class="fas fa-check"></i>Fogão</li>
                        <li><i class="fas fa-check"></i>02 quartos</li>
                        <li><i class="fas fa-check"></i>Sala de estar</li>
                        <li><i class="fas fa-check"></i>Banheiro privativo</li>
                    </ul>
                </div>
            </div>

            <div class="acomodacao">
                <div class="descricao">
                    <h3>Suíte casal superior</h3>
                    <div class="capa foto">
                        <a href="#photo03">
                            <img onclick="openPhoto('16')" class="photo" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_ap-suite-superior-01.jpg" alt="Suíte casal superior">
                        </a>
                    </div>
                    <p>
                        Acomodação projetada para comportar até 02 pessoas, em 01 cama de casal,
                        com ar-condicionado, frigobar, varanda e banheiro privativo. Corresponde à
                        acomodação de número 20.
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i>Ar-condicionado</li>
                        <li><i class="fas fa-check"></i>Televisão</li>
                        <li><i class="fas fa-check"></i>Frigobar</li>
                        <li><i class="fas fa-check"></i>Varanda</li>
                        <li><i class="fas fa-check"></i>Banheiro privativo</li>
                    </ul>
                </div>
            </div>

            <div class="acomodacao">
                <div class="descricao">
                    <h3>Suíte quádrupla superior</h3>
                    <div class="capa foto">
                        <a href="#photo04">
                            <img onclick="openPhoto('21')" class="photo" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_ap-suite-quadrupla-01.jpg" alt="Suíte quádrupla">
                        </a>
                    </div>
                    <p>
                        Acomodação projetada para comportar até 04 pessoas, em 04 camas de solteiro
                        em 02 quartos, com ar-condicionado, frigobar, varanda e banheiro privativo.
                        Corresponde à acomodação de número 21.
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i>Ar-condicionado</li>
                        <li><i class="fas fa-check"></i>Televisão</li>
                        <li><i class="fas fa-check"></i>02 quartos</li>
                        <li><i class="fas fa-check"></i>Frigobar</li>
                        <li><i class="fas fa-check"></i>Varanda</li>
                        <li><i class="fas fa-check"></i>Banheiro privativo</li>
                    </ul>
                </div>
            </div>

            <div class="acomodacao">
                <div class="descricao">
                    <h3>Suíte térrea</h3>
                    <div class="capa foto">
                        <a href="#photo05">
                            <img onclick="openPhoto('27')" class="photo" src="<?= INCLUDE_PATH_FULL ?>img/thumbnails/tn_ap-suite-terrea-01.jpg" alt="Suíte térrea">
                        </a>
                    </div>
                    <p>
                        Acomodação projetada para comportar 02 pessoas em 01 cama de casal ou
                        03 pessoas em 01 cama de casal e 01 cama de solteiro, com ar-condicionado,
                        frigobar e banheiro privativo. Corresponde às acomodações de número 23 à 28.
                    </p>
                    <ul>
                        <li><i class="fas fa-check"></i>Ar-condicionado</li>
                        <li><i class="fas fa-check"></i>Televisão</li>
                        <li><i class="fas fa-check"></i>Frigobar</li>
                        <li><i class="fas fa-check"></i>Banheiro privativo</li>
                    </ul>
                </div>
            </div>

        </section>
        <!-- Fim: acomodacoes -->
    </main>
