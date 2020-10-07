<?php include('templates/header.php') ?>

<main>
    <!-- Inicio: slider -->
    <section class="slider items-1">
        <h2 class="font-size-0">Imagem</h2>

        <div id="item-1" class="control-operator"></div>

        <section class="item bg2" id="banner-menor">
            <h3 class="font-size-0">Primeira imagem</h3>
        </section>

    </section>
    <!-- Fim: slider -->

    <!-- Inicio: reservas -->
    <section class="reservas">
        <h2 class="row-title">Reservas</h2>
        <div class="row-green"></div>
        <p>Reservas feitas somente por contato telefônico, WhatsApp, ou via e-mail.</p>
        <ul>
            <li>Telefone: <a href="tel:+5507141240051">(71) 4124-0051</a></li>
            <li>WhatsApp: <a href="tel:+55071988519487">(71) 98851-9487</a></li>
        </ul>

        <form  method="post" action="<?= INCLUDE_PATH ?>reservas">
            <label for="">Nome:</label>
            <input type="text" required placeholder="Nome para a reserva" name="nome">

            <label for="">E-mail:</label>
            <input type="email" required placeholder="email@dominio.com" name="email">

            <label for="">Entrada:</label>
            <input type="date" required name="entrada">

            <label for="">Saída:</label>
            <input type="date" required name="saida">

            <label for="">Adultos:</label>
            <input type="number" required placeholder="Número de adultos" name="adultos">

            <label for="">Crianças (até 05 anos):</label>
            <input type="number" required placeholder="Número de crianças até 05 anos" name="criancas">

            <label for="">Texto livre (dúvidas, observação...):</label>
            <textarea name="mensagem" cols="30" rows="30" placeholder="Boa tarde! Gostaria de saber como funciona..."></textarea>

            <input type="submit" value="Enviar" name="acao">
        </form>
    </section>
    <!-- Fim: reservas -->
</main>
