<?php include('templates/header.php') ?>

<section id="prices" class="container-sm">
    <div class="title-separator">
        <h2>Valores</h2>
    </div>

    <div id="prices-content">
        <div>
            <div id="summer">
                <h3>Diárias de 2022</h3>

                <ul class="mt-50 mb-20">
                    <li class="mb-20">Apartamento <b>06</b> pessoas <b>R$ 420,00</b></li>
                    <li class="mb-20">Apartamento <b>05</b> pessoas <b>R$ 330,00</b></li>
                    <li class="mb-20">Apartamento <b>04</b> pessoas <b>R$ 280,00</b></li>
                    <li class="mb-20">Apartamento <b>03</b> pessoas <b>R$ 230,00</b></li>
                    <li class="mb-20">Apartamento <b>02</b> pessoas <b>R$ 180,00</b></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<main class="container-sm">
    <section id="reservations">
        <div class="title-separator">
            <h2>Reserva</h2>
        </div>

        <div class="alert">
            <span>⚠</span> E-mail enviado!
        </div>

        <form method="POST" action="<?= INCLUDE_PATH ?>reserva">
            <div class="input-block">
                <label for="name">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/person.svg" alt="Ícone usuário" >
                    Nome:
                </label>
                <input type="text" name="name" placeholder="Qual seu nome completo?" id="name" required>
            </div>

            <div class="input-block">
                <label for="email">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/email.svg" alt="Ícone email" >
                    E-mail:
                </label>
                <input type="email" name="email" placeholder="Qual seu e-mail?" id="email" required>
            </div>

            <div class="input-block">
                <label for="checkin">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/calendar.svg" alt="Ícone calendário" >
                    Entrada:
                </label>
                <input type="date" name="checkin" id="checkin" required>
            </div>

            <div class="input-block">
                <label for="checkout">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/calendar.svg" alt="Ícone calendário" >
                    Saída:
                </label>
                <input type="date" name="checkout" id="checkout" required>
            </div>

            <div class="input-block">
                <label for="adults">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/adults.svg" alt="Ícone adultos" >
                    Adultos:
                </label>
                <input type="number" name="adults" id="adults" placeholder="Quantos adultos?" required>
            </div>

            <div class="input-block">
                <label for="kids">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/baby.svg" alt="Ícone criança" >
                    Crianças (até 05 anos):
                </label>
                <input type="number" name="kids" id="kids" placeholder="Quantidade de crianças até 05 anos de idade">
            </div>

            <div class="input-block">
                <label for="message">
                    <img src="<?= INCLUDE_PATH_FULL ?>img/icons/chat.svg" alt="Ícone mensagem" >
                    Mensagem (dúvidas, observações...):
                </label>
                <textarea name="message" id="message" placeholder="Quer nos perguntar algo?"></textarea>
            </div>

            <div id="send">
                <input type="submit" name="mail-sended" value="Enviar">
            </div>
        </form>
    </section>
</main>
