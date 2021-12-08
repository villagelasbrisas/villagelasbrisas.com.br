<?php include('templates/header.php') ?>

<main class="container">
    <div class="slider autoplay items-3">
        <div id="item-1" class="control-operator"></div>
        <div id="item-2" class="control-operator"></div>
        <div id="item-3" class="control-operator"></div>

        <section class="item slider-image-1">
            <h2 class="dn">Banner da piscina</h2>
        </section>
        <section class="item slider-image-2">
            <h2 class="dn">Banner dos quartos e praia ao fundo</h2>
        </section>
        <section class="item slider-image-3">
            <h2 class="dn">Banner da praia</h2>
        </section>

        <div class="controls">
            <a href="#item-1" class="control-button">•</a>
            <a href="#item-2" class="control-button">•</a>
            <a href="#item-3" class="control-button">•</a>
        </div>
    </div>

    <section id="about" class="container-sm">
        <div id="about-header">
            <div id="left">
                <div class="line"></div>

                <div id="titles">
                    <h2>Sobre nós</h2>
                    <p>Conheça nossa história</p>
                </div>
            </div>

            <h3 class="green-box">Village Las Brisas</h3>
        </div>

        <div id="about-content">
            <img id="village-img" src="<?= INCLUDE_PATH_FULL ?>img/village.jpg" alt="O village">

            <p>
                Localizado no bairro de Barra Grande em Vera Cruz na Ilha de Itaparica - BA, o Village Las Brisas
                dispõe de uma grande área verde, vista de frente para ao mar, área de lazer e acesso gratuito à
                estacionamento e internet (WI-FI).
                <br><br>

                Os hóspedes podem desfrutar de bebidas, lanches e pratos rápidos em nossa lanchonete em frente à
                piscina. Você também pode saborear o café da manhã, servido diáriamente no restaurante. Gosta de
                fazer sua própria comida? Temos categorias com cozinha e uma churrasqueira compartilhada!
                <br><br>

                Com ar-condicionado, televisão, ventilador, geladeira, cozinha, sala de estar e banheiro privativo,
                nossas simples acomodações oferecem uma boa estadia para aqueles que querem descansar da vida corrida
                das grandes cidades.
                <br><br>

                <a href="#regras">Veja nossas regras.</a>
            </p>
        </div>
    </section>

    <section id="gallery" class="container-sm">
        <div class="title-separator">
            <h2>Galerias</h2>
        </div>

        <div id="gallery-content">
            <a href="<?= INCLUDE_PATH ?>galeria/lazer">
                <img src="<?= INCLUDE_PATH_FULL ?>img/box-lazer.jpg" alt="Galeria lazer">
                <h3>Lazer</h3>
            </a>

            <a href="<?= INCLUDE_PATH ?>galeria/restaurante">
                <img src="<?= INCLUDE_PATH_FULL ?>img/box-restaurante.jpg" alt="Galeria restaurante">
                <h3>Restaurante</h3>
            </a>

            <a href="<?= INCLUDE_PATH ?>galeria/reveillon">
                <img src="<?= INCLUDE_PATH_FULL ?>img/box-reveillon.jpg" alt="Galeria revéillon">
                <h3>Reveillon</h3>
            </a>

            <a href="<?= INCLUDE_PATH ?>galeria/paraquedismo" class="dn">
                <img src="<?= INCLUDE_PATH_FULL ?>img/box-paraquedismo.jpg" alt="Galeria paraquedismo">
                <h3>Paraquedismo</h3>
            </a>
        </div>

        <a class="more" href="#ver-mais">Ver mais...</a>
    </section>
</main>

<script>
    const galleryMoreButton = document.querySelector('.more');
    const galleryContent =  document.querySelector('#gallery-content');
    const galleryThumbs = galleryContent.querySelectorAll('a');

    galleryMoreButton.onclick = function(){
        for (let i = 3; i < galleryThumbs.length; i++) {
            galleryThumbs[i].classList.toggle('dn');
        }
    };
</script>
