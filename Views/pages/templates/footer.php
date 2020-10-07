<?php

    if(!$this->withoutFooter) { echo '
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
                    <p class="font-size-20 p10 hover-font-black">Nossa localização
                        <i class="fas fa-map-marker-alt font-red"></i>
                    </p>
                </div>

                <iframe id="google-maps" class="w-100-per h-300-px"></iframe>
            </div>

            <div class="bg-green ptb15 tac font-gray">
                <h3 class="font-size-0">Autor</h3>

                <p class="font-size-15">
                    2019 Todos os direitos reservados Village Las Brisas
                </p>
                <p class="font-size-12">
                    Desenvolvido por:
                    <a class="hover-font-black" target="_blank" href="https://www.github.com/gcairesdev">
                        <u>Guilherme Caires</u>
                        <i class="fas fa-code"></i>
                    </a>
                </p>
            </div>
        </footer>
    ';}

    foreach($this->scripts as $script) {
        echo "\n<script src=\"" .INCLUDE_PATH_FULL. "js/" .$script. ".js\"></script>";
    }

    echo "\n";
?>
</body>
</html>
