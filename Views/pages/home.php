    <main>
        <!-- Inicio: slider -->
        <section class="slider autoplay items-3">
            <h2 class="font-size-0">Banner slider</h2>

            <div id="item-1" class="control-operator"></div>
            <div id="item-2" class="control-operator"></div>
            <div id="item-3" class="control-operator"></div>

            <section class="item bg1">
                <h3 class="font-size-0">Primeira imagem</h3>
            </section>

            <section class="item bg2">
                <h3 class="font-size-0">Segunda imagem</h3>
            </section>

            <section class="item bg3">
                <h3 class="font-size-0">Terceira imagem</h3>
            </section>

            <div class="controls">
                <a href="#item-1" class="control-button">•</a>
                <a href="#item-2" class="control-button">•</a>
                <a href="#item-3" class="control-button">•</a>
            </div>
        </section>
        <!-- Fim: slider -->

        <!-- Inicio: o village -->
        <section class="sobre">
            <div class="dib font-size-60 font-green">|</div>

            <div class="tal pb20 dib">
                <h2 class="dib font-size-20">Sobre nós</h2>
                <p class="dib bg-green p10 font-white ml-10">Village Las Brisas</p><br>
                <p class="dib font-size-13 font-gray2">Conheça nossa história</p>
            </div>

            <div class="village">
                <img src="misc/img/village.jpg" alt="O village">
            </div>
            <p class="font-size-20 taj pt10">

                Localizado no bairro de Barra Grande em Vera Cruz na Ilha de Itaparica - BA, o Village Las Brisas
                dispõe de uma grande área verde, vista de frente para ao mar, área de lazer e acesso gratuito à
                estacionamento e internet (wi-fi).
                <br><br>

                Os hóspedes podem desfrutar de bebidas, lanches e pratos rápidos em nossa lanchonete em frente à
                piscina. Você também pode saborear o café da manhã, servido diáriamente no restaurante. Gosta de
                fazer sua própria comida? Temos categorias com cozinha e uma churrasqueira pública!
                <a href="regras/" class="font-green hover-font-orange">(Consultar regulamento aqui)</a>
                <br><br>

                Com ar-condicionado, televisão, ventilador, geladeira, cozinha, sala de estar e banheiro privativo,
                nossas simples acomodações oferecem uma boa estadia para aqueles que querem descansar da vida corrida
                das grandes cidades.
            </p>
        </section>
        <!-- Fim: o village -->

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
                    <a href="<?= INCLUDE_PATH ?>galerias/reveillon">
                        <img src="<?= INCLUDE_PATH_FULL ?>img/box-reveillon.jpg" alt="Galeria restaurante">
                        <h3>Reveillon</h3>
                    </a>
                </div>

                <div class="ver-mais">
                    <a href="<?= INCLUDE_PATH ?>galerias/" class="bg-green">Ver mais...</a>
                </div>
            </div>
        </section>
        <!-- Fim: galerias -->
    </main>
