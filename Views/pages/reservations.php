<?php include('templates/header.php') ?>

<section id="prices" class="container-sm aos">
    <div class="title-separator" data-aos="fade-right" data-aos-duration="600">
        <h2>Valores</h2>
    </div>

    <div id="prices-content" class="aos">
        <div id="reveillon" data-aos="fade-left" data-aos-duration="600">
            <h3>Pacote de Revéillon 2022</h3>

            31/12/2021 à 04/01/2022

            <ul class="mt-50 mb-20">
                <li class="mb-20">Apartamento <b>06</b> pessoas <b>R$ 2.900,00</b></li>
                <li class="mb-20">Apartamento <b>05</b> pessoas <b>R$ 2.500,00</b></li>
                <li class="mb-20">Apartamento <b>04</b> pessoas <b>R$ 2.000,00</b></li>
                <li class="mb-20">Apartamento <b>03</b> pessoas <b>R$ 1.500,00</b></li>
                <li class="mb-20">Apartamento <b>02</b> pessoas <b>R$ 1.250,00</b></li>
                <li class="mb-20">Suíte <b>02</b> pessoas, c/ café <b>R$ 1.250,00</b></li>
                <li class="mb-20">Suíte <b>03</b> pessoas, c/ café <b>R$ 1.500,00</b></li>
            </ul>
        </div>

        <div class="aos">
            <div id="summer" data-aos="fade-right" data-aos-duration="600">
                <h3>Diárias de verão 2022</h3>

                Apartir do dia 04/01/2022

                <ul class="mt-50 mb-20">
                    <li class="mb-20">Apartamento <b>06</b> pessoas <b>R$ 420,00</b></li>
                    <li class="mb-20">Apartamento <b>05</b> pessoas <b>R$ 350,00</b></li>
                    <li class="mb-20">Apartamento <b>04</b> pessoas <b>R$ 300,00</b></li>
                    <li class="mb-20">Apartamento <b>03</b> pessoas <b>R$ 230,00</b></li>
                    <li class="mb-20">Apartamento <b>02</b> pessoas <b>R$ 180,00</b></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<main class="container-sm aos">
    <section id="reservations">
        <div class="title-separator" data-aos="fade-left" data-aos-duration="600">
            <h2>Reserva</h2>
        </div>

        <div class="alert" id="orange-alert" data-aos="flip-up" data-aos-duration="900">
            <span>⚠</span> Priorize ligação/WhatsApp:

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
                    Nome:
                </label>
                <input type="text" name="name" placeholder="Qual seu nome completo?" id="name" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-left">
                <label for="email">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/email.svg" alt="Ícone email" >
                    E-mail:
                </label>
                <input type="email" name="email" placeholder="Qual seu e-mail?" id="email" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="checkin">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/calendar.svg" alt="Ícone calendário" >
                    Entrada:
                </label>
                <input type="date" name="checkin" id="checkin" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-left">
                <label for="checkout">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/calendar.svg" alt="Ícone calendário" >
                    Saída:
                </label>
                <input type="date" name="checkout" id="checkout" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="adults">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/adults.svg" alt="Ícone adultos" >
                    Adultos:
                </label>
                <input type="number" name="adults" id="adults" placeholder="Quantos adultos?" required>
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-left">
                <label for="kids">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/baby.svg" alt="Ícone criança" >
                    Crianças (até 05 anos):
                </label>
                <input type="number" name="kids" id="kids" placeholder="Quantidade de crianças até 05 anos de idade">
            </div>

            <div class="input-block" data-aos-duration="200" data-aos="fade-right">
                <label for="message">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/chat.svg" alt="Ícone mensagem" >
                    Mensagem (dúvidas, observações...):
                </label>
                <textarea name="message" id="message" placeholder="Quer nos perguntar algo?"></textarea>
            </div>

            <div id="send" data-aos-duration="200" data-aos="fade-left">
                <input type="submit" name="mail-sended" value="Enviar">
            </div>
        </form>
    </section>
</main>
