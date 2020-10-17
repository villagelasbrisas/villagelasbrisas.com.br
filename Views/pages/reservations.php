<?php include('templates/header.php') ?>

<main class="container-sm">
    <section id="reservations">
        <div class="title-separator">
            <h2>Reservas</h2>
        </div>

        <div class="alert">
            <span>⚠</span> Crianças com mais de 05 anos, contam como adulto.
        </div>

        <form method="POST" action="<?= INCLUDE_PATH ?>reservas">
            <div class="input-block">
                <label for="name">
                    <span>👤</span>
                    <p>Nome:</p>
                </label>
                <input type="text" name="name" placeholder="Qual seu nome completo?" id="name" required>
            </div>

            <div class="input-block">
                <label for="email">
                    <span>📧</span>
                    <p>E-mail:</p>
                </label>
                <input type="email" name="email" placeholder="Qual seu e-mail?" id="email" required>
            </div>

            <div class="input-block">
                <label for="checkin">
                    <span>🗓</span>
                    <p>Entrada:</p>
                </label>
                <input type="date" name="checkin" id="checkin" required>
            </div>

            <div class="input-block">
                <label for="checkout">
                    <span>📆</span>
                    <p>Saída:</p>
                </label>
                <input type="date" name="checkout" id="checkout" required>
            </div>

            <div class="input-block">
                <label for="adults">
                    <span>👫</span>
                    <p>Adultos:</p>
                </label>
                <input type="number" name="adults" id="adults" placeholder="Quantos adultos?" required>
            </div>

            <div class="input-block">
                <label for="kids">
                    <span>👦</span>
                    <p>Crianças (até 05 anos):</p>
                </label>
                <input type="number" name="kids" id="kids" placeholder="Quantidade de crianças até 05 anos de idade">
            </div>

            <div class="input-block">
                <label for="message">
                    <span>💬</span>
                    <p>Mensagem (dúvidas, observações...):</p>
                </label>
                <textarea name="message" id="message" placeholder="Quer nos perguntar algo?"></textarea>
            </div>

            <div id="send">
                <input type="submit" name="mail-sended" value="Enviar">
            </div>
        </form>
    </section>
</main>
