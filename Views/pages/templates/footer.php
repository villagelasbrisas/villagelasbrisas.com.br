<footer>
    <h2 class="font-size-0">Rodapé</h2>

    <section class="depoimentos">
        <h2 class="row-title">Depoimentos</h2>
        <div class="row-green"></div>

        <div class="depoimento">
            <h3 class="font-size-0">Primeiro depoimento</h3>
            <p>Muito bom, literalmente na praia de Barra Grande uma das mais belas da ilha. Fui bem atendido por todos os funcionários.</p>
            <span>João Carlos</span>
            <div class="row-gray"></div>
        </div>
        <div class="depoimento">
            <h3 class="font-size-0">Segundo depoimento</h3>
            <p>Village Las brisas é top na categoria. Ótimo atendimento, dependências que agradam a todos os gostos, lindas vista para o mar, super recomendo.</p>
            <span>Geovane Rosa</span>
            <div class="row-gray"></div>
        </div>
        <div class="depoimento">
            <h3 class="font-size-0">Terceiro depoimento</h3>
            <p>Lugar tranquilo,  ótimas acomodações,  muito verde,  piscina ótima e exatamente na frente do mar.</p>
            <span>Thaís Bitencourt</span>
            <div class="row-gray"></div>
        </div>

    </section>

    <div id="mapa">
        <h3 class="font-size-0">Mapa</h3>

        <div class="tac bg-white">
            <a href="https://goo.gl/maps/hRRAmpsSShMK7qVC8" target="_blank">
                <p class="font-size-20 p10 hover-font-black">Nossa localização
                    <i class="fas fa-map-marker-alt font-red"></i>
                </p>
            </a>
        </div>

        <iframe class="w-100-per h-300-px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.4068796012184!2d-38.67588596620637!3d-13.03799720544944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x715ff8d6081d23f%3A0xb31493fe00d3bbc0!2sVillage%20Las%20Brisas!5e0!3m2!1spt-BR!2sbr!4v1568762940324!5m2!1spt-BR!2sbr">
        </iframe>
    </div>

    <div class="bg-green ptb15 tac font-gray">
        <h3 class="font-size-0">Autor</h3>

        <p class="font-size-15">
            2019 Todos os direitos reservados Village Las Brisas
        </p>
        <p class="font-size-12">
            Desenvolvido por:
            <a class="hover-font-black" href="https://www.github.com/gcairesdev">
                <u>Guilherme Caires</u>
                <i class="fab fa-github"></i>
            </a>
        </p>
    </div>
</footer>

    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+55 (071) 98851-9487",
                call_to_action: "Faça sua reserva por aqui!",
                position: "right",
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <script src="<?= INCLUDE_PATH_FULL ?>js/font-awesome/all.min.js"></script>
    <script src="<?= INCLUDE_PATH_FULL ?>js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="<?= INCLUDE_PATH_FULL ?>js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="<?= INCLUDE_PATH_FULL ?>js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
