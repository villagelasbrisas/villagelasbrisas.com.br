<?php include('templates/header.php') ?>

<section id="prices" class="container-sm">
    <div class="title-separator" data-aos="fade-right" data-aos-duration="600">
        <h2>Valores</h2>
    </div>

    <div id="prices-content">
        <div id="reveillon" data-aos="fade-up-left" data-aos-duration="600">
            <h3>Pacote de Revéillon 2021</h3>

            <p>30/12/2020 à 04/01/2021</p>

            <ul class="mt-50 mb-20">
                <li class="mb-20">Apartamento <b>06</b> pessoas <b>R$ 2.700,00</b></li>
                <li class="mb-20">Apartamento <b>05</b> pessoas <b>R$ 2.400,00</b></li>
                <li class="mb-20">Apartamento <b>04</b> pessoas <b>R$ 2.000,00</b></li>
                <li class="mb-20">Apartamento <b>03</b> pessoas <b>R$ 1.500,00</b></li>
                <li class="mb-20">Apartamento <b>02</b> pessoas <b>R$ 1.200,00</b></li>
                <li class="mb-20">Suíte <b>02</b> pessoas, c/ café <b>R$ 1.200,00</b></li>
                <li class="mb-20">Suíte <b>03</b> pessoas, c/ café <b>R$ 1.400,00</b></li>
            </ul>
        </div>

        <div id="summer" data-aos="fade-up-right" data-aos-duration="600">
            <h3>Diárias de verão 2021</h3>

            <p>Apartir do dia 04/01/2021</p>

            <ul class="mt-50 mb-20">
                <li class="mb-20">Apartamento <b>06</b> pessoas <b>R$ 420,00</b></li>
                <li class="mb-20">Apartamento <b>05</b> pessoas <b>R$ 350,00</b></li>
                <li class="mb-20">Apartamento <b>04</b> pessoas <b>R$ 300,00</b></li>
                <li class="mb-20">Apartamento <b>03</b> pessoas <b>R$ 220,00</b></li>
                <li class="mb-20">Apartamento <b>02</b> pessoas <b>R$ 160,00</b></li>
            </ul>
        </div>
    </div>
</section>

<main class="container-sm">
    <section id="reservations">
        <div class="title-separator" data-aos="fade-left" data-aos-duration="600">
            <h2>Reserva</h2>
        </div>

        <div class="alert" style="background: #ffb358; color: #333;" data-aos="flip-up" data-aos-duration="900">
            <span>⚠</span> Priorize os canais telefônicos / WhatsApp:

            <a href="tel:+5507141240051">
                (71) 4124-0051
            </a>

            <a href="tel:+55071988519487">
                (71) 9 8851-9487
            </a>
        </div>

        <div class="alert" data-aos="flip-up" data-aos-duration="900">
            <span>⚠</span> Crianças com mais de 05 anos, contam como adulto.
        </div>

        <form method="POST" action="<?= INCLUDE_PATH ?>reserva">
            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="name">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/person.svg" alt="Ícone usuário" >
                    <p>Nome:</p>
                </label>
                <input type="text" name="name" placeholder="Qual seu nome completo?" id="name" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-left">
                <label for="email">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/email.svg" alt="Ícone email" >
                    <p>E-mail:</p>
                </label>
                <input type="email" name="email" placeholder="Qual seu e-mail?" id="email" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="checkin">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/calendar.svg" alt="Ícone calendário" >
                    <p>Entrada:</p>
                </label>
                <input type="date" name="checkin" id="checkin" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-left">
                <label for="checkout">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/calendar.svg" alt="Ícone calendário" >
                    <p>Saída:</p>
                </label>
                <input type="date" name="checkout" id="checkout" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="adults">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/adults.svg" alt="Ícone adultos" >
                    <p>Adultos:</p>
                </label>
                <input type="number" name="adults" id="adults" placeholder="Quantos adultos?" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-left">
                <label for="kids">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/baby.svg" alt="Ícone criança" >
                    <p>Crianças (até 05 anos):</p>
                </label>
                <input type="number" name="kids" id="kids" placeholder="Quantidade de crianças até 05 anos de idade">
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="message">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/chat.svg" alt="Ícone mensagem" >
                    <p>Mensagem (dúvidas, observações...):</p>
                </label>
                <textarea name="message" id="message" placeholder="Quer nos perguntar algo?"></textarea>
            </div>

            <div id="send" data-aos-duration="200" data-aos="fade-left">
                <input type="submit" name="mail-sended" value="Enviar">
            </div>
        </form>
    </section>
</main>
