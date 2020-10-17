<?php

    if(!$this->withoutFooter) { echo '
        <footer>
            <section id="evaluations" class="container-sm">
                <div class="title-separator">
                    <h2>Depoimentos</h2>
                </div>

                <div class="evaluation">
                    <a href="https://goo.gl/maps/RhnFDyVtwqafpZrW9" target="_blank">
                        Muito bom, literalmente na praia de Barra Grande uma das mais belas da ilha. Fui bem atendido por todos os funcionários.
                    </a>
                    <h6>Jõao Carlos</h6>
                </div>

                <div class="evaluation">
                    <a href="https://goo.gl/maps/DTw56VWFo4kzTRpG6" target="_blank">
                        Village Las brisas é top na categoria. Ótimo atendimento, dependências que agradam a todos os gostos, lindas vista para o mar, super recomendo.
                    </a>
                    <h6>Geovane Rosa</h6>
                </div>

                <div class="evaluation">
                    <a href="https://goo.gl/maps/x6C1NA7M4c6sWCS16" target="_blank">
                        Lugar tranquilo, ótimas acomodações, muito verde, piscina ótima e exatamente na frente do mar.
                    </a>
                    <h6>Thaís Bitencourt</h6>
                </div>
            </section>

            <div id="map">
                <div id="map-header">
                    <a href="https://goo.gl/maps/hRRAmpsSShMK7qVC8">
                        Nossa localização
                        <img src="'. INCLUDE_PATH_FULL .'img/icons/location.svg" alt="Localização" >
                    </a>
                </div>

                <iframe id="google-maps"></iframe>
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
</body>
</html>
