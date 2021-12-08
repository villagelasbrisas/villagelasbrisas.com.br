<?php

    if(!$this->withoutFooter) { echo '
        <footer>
            <section id="evaluations" class="container-sm">
                <div>
                    <div class="title-separator">
                        <h2>Depoimentos</h2>
                    </div>
                </div>

                <div>
                    <div class="evaluation">
                        <a href="https://goo.gl/maps/RhnFDyVtwqafpZrW9" target="_blank">
                            Muito bom, literalmente na praia de Barra Grande uma das mais belas da ilha. Fui bem atendido por todos os funcionários.
                        </a>
                        <h3>João Carlos</h3>
                    </div>
                </div>

                <div>
                    <div class="evaluation">
                        <a href="https://goo.gl/maps/DTw56VWFo4kzTRpG6" target="_blank">
                            Village Las brisas é top na categoria. Ótimo atendimento, dependências que agradam a todos os gostos, lindas vista para o mar, super recomendo.
                        </a>
                        <h3>Geovane Rosa</h3>
                    </div>
                </div>

                <div>
                    <div class="evaluation">
                        <a href="https://goo.gl/maps/x6C1NA7M4c6sWCS16" target="_blank">
                            Lugar tranquilo, ótimas acomodações, muito verde, piscina ótima e exatamente na frente do mar.
                        </a>
                        <h3>Thaís Bitencourt</h3>
                    </div>
                </div>
            </section>

            <div id="map">
                <div id="map-header">
                    <a href="https://goo.gl/maps/hRRAmpsSShMK7qVC8">
                        Nossa localização
                        <img src="'. INCLUDE_PATH_FULL .'img/icons/location.svg" alt="Localização" >
                    </a>
                </div>

                <iframe id="google-maps" title="Mapa da pousada"></iframe>
            </div>

            <div id="footer">
                <p>
                    2019 Todos os direitos reservados Village Las Brisas
                </p>
                <p>
                    Desenvolvido por:
                    <a target="_blank" href="https://www.github.com/gcairesdev">
                        <u>Guilherme Caires</u> 👋🤓🍵
                    </a>
                </p>
            </div>
        </footer>
    ';}

    if($this->scripts) {
        foreach($this->scripts as $script) {
            echo "\n<script src=\"" .INCLUDE_PATH_FULL. "js/" .$script. ".js\"></script>";
        }
    }

    if($this->publicScripts){
        foreach($this->publicScripts as $publicScript) {
            echo "\n<script src=\"" .INCLUDE_PATH_FULL. "js/" .$publicScript. ".js\"></script>";
        }
    }
?>
    <script id="toogle-menu-script">
        document.addEventListener("DOMContentLoaded", function(){
            const toggleMenuDiv = document.getElementById('toggle-menu');
            const header = document.querySelector('header');

            toggleMenuDiv.addEventListener('click', toggleMenu);

            function toggleMenu() { header.classList.toggle('inative');}
        });
    </script>
    <script id="rules-script">
        const rulesMenu = document.getElementById('rules-menu');
        rulesMenu.setAttribute('onclick', 'toggleRulesDisplay()');

        const rules = document.getElementById('regras');
        rules.setAttribute('onclick', 'toggleRulesDisplay()');

        function toggleRulesDisplay() {
            document.querySelector('header').classList.toggle('dn');
            document.querySelector('main').classList.toggle('dn');
            document.querySelector('footer').classList.toggle('dn');
            rules.classList.toggle('dn');
        }

        document.body.onkeyup = function(e) {(e.which == 27 && !rules.classList.contains('dn')) && toggleRulesDisplay();}
    </script>
    <script id="whatsapp-script">
        (function () {
            var protocol = document.location.protocol;
            var host = "getbutton.io";
            var url = protocol + "//static." + host;

            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.async = true;
            script.src = url + '/widget-send-button/js/init.js';

            script.onload = function () {
                WhWidgetSendButton.init(host, protocol, {
                    whatsapp: "+55 (071) 98851-9487",
                    call_to_action: "Faça sua reserva por aqui!",
                    position: "right",
                });
            };

            var destination = document.getElementsByTagName('script')[0];
            destination.parentNode.insertBefore(script, destination);
        })();
    </script>
</body>
</html>
