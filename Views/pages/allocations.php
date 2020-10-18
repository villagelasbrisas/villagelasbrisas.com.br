<?php include('templates/header.php') ?>

<main class="container">
    <section id="allocations" class="container-sm">
        <div class="title-separator" data-aos="fade-right" data-aos-delay="200" data-aos-duration="900">
            <h2>Acomodações</h2>
        </div>

        <div class="alert" data-aos="flip-up" data-aos-delay="200" data-aos-duration="900">
            <span>⚠</span> Toque nas imagens para vê-las maior.
        </div>

        <div class="allocation" data-aos="fade-up-right" data-aos-delay="300">
            <div class="allocation-content">
                <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
                    <img
                        alt="Apartamento grande"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-grande-00.jpg"
                    >
                    <img
                        class="dn"
                        alt="Apartamento grande"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-grande-01.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento grande"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-grande-02.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento grande"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-grande-03.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento grande"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-grande-04.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento grande"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-grande-05.jpg"
                    >
                </a>

                <div class="allocation-paragraph">
                    <h3>Apartamento grande</h3>

                    <p>
                        Acomodação projetada para comportar até 05 pessoas, em 01 cama de casal,
                        01 cama de solteiro e 01 bi-cama, com ar-condicionado, ventilador, geladeira, fogão,
                        sala de estar, e banheiro privativo. São as acomodações de número 01 à 12.
                    </p>

                    <ul>
                        <li><span class="check">✔</span> Ar-condicionado</li>
                        <li><span class="check">✔</span> Ventilador</li>
                        <li><span class="check">✔</span> Televisão</li>
                        <li><span class="check">✔</span> Geladeira</li>
                        <li><span class="check">✔</span> Fogão</li>
                        <li><span class="check">✔</span> Sala de estar</li>
                        <li><span class="check">✔</span> Banheiro privativo</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="allocation" data-aos="fade-up-left" data-aos-delay="300">
            <div class="allocation-content">
                <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
                    <img
                        alt="Apartamento pequeno"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-pequeno-00.jpg"
                    >
                    <img
                        class="dn"
                        alt="Apartamento pequeno"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-pequeno-01.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento pequeno"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-pequeno-02.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento pequeno"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-pequeno-03.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento pequeno"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-pequeno-04.jpg"
                    >
                </a>

                <div class="allocation-paragraph">
                    <h3>Apartamento pequeno</h3>

                    <p>
                        Acomodação projetada para comportar até 03 pessoas, em 01 cama de casal e 01 cama de solteiro,
                        com ar-condicionado, frigobar, fogão, varanda, e banheiro privativo. São as acomodações de
                        número 13 à 18.
                    </p>

                    <ul>
                        <li><span class="check">✔</span> Ar-condicionado</li>
                        <li><span class="check">✔</span> Televisão</li>
                        <li><span class="check">✔</span> Frigobar</li>
                        <li><span class="check">✔</span> Fogão</li>
                        <li><span class="check">✔</span> Banheiro privativo</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="allocation" data-aos="fade-up-right" data-aos-delay="300">
            <div class="allocation-content">
                <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
                    <img
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-00.jpg"
                    >
                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-01.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-02.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-03.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-04.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-05.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-06.jpg"
                    >

                    <img
                        class="dn"
                        alt="Apartamento familia"
                        src="<?= INCLUDE_PATH_FULL ?>img/ap-familia-07.jpg"
                    >
                </a>

                <div class="allocation-paragraph">
                    <h3>Apartamento família</h3>

                    <p>
                        Acomodação projetada para comportar até 06 pessoas, em 02 cama de casal e 02 camas de solteiro
                        distribuídas em 02 quartos, com ar-condicionado, geladeira, fogão, e banheiro privativo.
                        Corresponde à acomodação de número 19.
                    </p>

                    <ul>
                        <li><span class="check">✔</span> Ar-condicionado</li>
                        <li><span class="check">✔</span> Televisão</li>
                        <li><span class="check">✔</span> Geladeira</li>
                        <li><span class="check">✔</span> Fogão</li>
                        <li><span class="check">✔</span> 02 quartos</li>
                        <li><span class="check">✔</span> Sala de estar</li>
                        <li><span class="check">✔</span> Banheiro privativo</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="allocation" data-aos="fade-up-left" data-aos-delay="300">
            <div class="allocation-content">
                <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
                    <img
                        alt="Suíte casal superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-casal-superior-00.jpg"
                    >
                    <img
                        class="dn"
                        alt="Suíte casal superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-casal-superior-01.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte casal superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-casal-superior-02.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte casal superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-casal-superior-03.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte casal superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-casal-superior-04.jpg"
                    >
                </a>

                <div class="allocation-paragraph">
                    <h3>Suíte casal superior</h3>

                    <p>
                        Acomodação projetada para comportar até 02 pessoas, em 01 cama de casal, com ar-condicionado,
                        frigobar, varanda e banheiro privativo. Corresponde à acomodação de número 20.
                    </p>

                    <ul>
                        <li><span class="check">✔</span> Ar-condicionado</li>
                        <li><span class="check">✔</span> Televisão</li>
                        <li><span class="check">✔</span> Frigobar</li>
                        <li><span class="check">✔</span> Varanda</li>
                        <li><span class="check">✔</span> Banheiro privativo</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="allocation" data-aos="fade-up-right" data-aos-delay="300">
            <div class="allocation-content">
                <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
                    <img
                        alt="Suíte quadrupla superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-quadrupla-superior-00.jpg"
                    >
                    <img
                        class="dn"
                        alt="Suíte quadrupla superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-quadrupla-superior-01.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte quadrupla superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-quadrupla-superior-02.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte quadrupla superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-quadrupla-superior-03.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte quadrupla superior"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-quadrupla-superior-04.jpg"
                    >
                </a>

                <div class="allocation-paragraph">
                    <h3>Suíte quádrupla superior</h3>

                    <p>
                        Acomodação projetada para comportar até 04 pessoas, em 04 camas de solteiro em 02 quartos,
                        com ar-condicionado, televisão, frigobar, varanda e banheiro privativo.
                        Corresponde à acomodação de número 21.
                    </p>

                    <ul>
                        <li><span class="check">✔</span> Ar-condicionado</li>
                        <li><span class="check">✔</span> Televisão</li>
                        <li><span class="check">✔</span> Frigobar</li>
                        <li><span class="check">✔</span> Varanda</li>
                        <li><span class="check">✔</span> 02 quartos</li>
                        <li><span class="check">✔</span> Banheiro privativo</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="allocation" data-aos="fade-up-left" data-aos-delay="300">
            <div class="allocation-content">
                <a href="#modal" class="modal-items" onclick="openPhoto(event.target)">
                    <img
                        alt="Suíte térrea"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-terrea-00.jpg"
                    >
                    <img
                        class="dn"
                        alt="Suíte térrea"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-terrea-01.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte térrea"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-terrea-02.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte térrea"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-terrea-03.jpg"
                    >

                    <img
                        class="dn"
                        alt="Suíte térrea"
                        src="<?= INCLUDE_PATH_FULL ?>img/suite-terrea-04.jpg"
                    >
                </a>

                <div class="allocation-paragraph">
                    <h3>Suíte térrea</h3>

                    <p>
                        Acomodação projetada para comportar 02 pessoas em 01 cama de casal ou 03 pessoas em
                        01 cama de casal e 01 cama de solteiro, com ar-condicionado, frigobar e banheiro privativo.
                        Corresponde às acomodações de número 23 à 28.
                    </p>

                    <ul>
                        <li><span class="check">✔</span> Ar-condicionado</li>
                        <li><span class="check">✔</span> Televisão</li>
                        <li><span class="check">✔</span> Frigobar</li>
                        <li><span class="check">✔</span> Banheiro privativo</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
</main>
