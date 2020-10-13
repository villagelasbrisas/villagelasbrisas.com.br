<?php include('templates/header.php') ?>

<main class="container-sm">
    <section id="reservations">
        <div class="title-separator">
            <h2>Reservas</h2>
        </div>

        <div class="alert">
            <i class="fas fa-exclamation-circle"></i>
            E-mail enviado!
        </div>

        <form method="POST" action="<?= INCLUDE_PATH ?>reservas">
            <div class="input-block">
                <label for="name">
                    <i class="fas fa-user"></i>

                    <p>
                        Nome:
                    </p>
                </label>
                <input type="text" name="name" placeholder="Qual seu nome completo?" id="name" required>
            </div>

            <div class="input-block">
                <label for="email">
                    <i class="fas fa-at"></i>

                    <p>
                        E-mail:
                    </p>
                </label>
                <input type="email" name="email" placeholder="Qual seu e-mail?" id="email" required>
            </div>

            <div class="input-block">
                <label for="checkin">
                    <i class="fas fa-calendar-check"></i>

                    <p>
                        Entrada:
                    </p>
                </label>
                <input type="date" name="checkin" id="checkin" required>
            </div>

            <div class="input-block">
                <label for="checkout">
                    <i class="fas fa-calendar-times"></i>

                    <p>
                        Saída:
                    </p>
                </label>
                <input type="date" name="checkout" id="checkout" required>
            </div>

            <div class="input-block">
                <label for="adults">
                    <i class="fas fa-male"></i>

                    <p>
                        Adultos:
                    </p>
                </label>
                <input type="number" name="adults" id="adults" placeholder="Quantos adultos?" required>
            </div>

            <div class="input-block">
                <label for="kids">
                    <i class="fas fa-baby"></i>

                    <p>
                        Crianças (até 05 anos):
                    </p>
                </label>
                <input type="number" name="kids" id="kids" placeholder="Quantidade de crianças até 05 anos de idade">
            </div>

            <div class="input-block">
                <label for="message">
                    <i class="fas fa-comment-alt"></i>

                    <p>
                        Mensagem (dúvidas, observações...):
                    </p>
                </label>
                <textarea name="message" id="message" placeholder="Quer nos perguntar algo?"></textarea>
            </div>

            <div id="send">
                <input type="submit" name="mail-sended" value="Enviar">
            </div>
        </form>
    </section>
</main>
