<?php include('templates/header.php') ?>

<main class="container-sm">
    <section id="reservations">
        <div class="title-separator" data-aos="fade-right" data-aos-duration="600">
            <h2>Reservas</h2>
        </div>

        <div class="alert" data-aos="flip-up" data-aos-duration="900">
            <span>⚠</span> E-mail enviado!
        </div>

        <form method="POST" action="<?= INCLUDE_PATH ?>reservas">
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
