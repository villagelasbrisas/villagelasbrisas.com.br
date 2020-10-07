<header>
    <h1 class="font-size-0">Village Las Brisas</h1>

    <!-- Inicio: controle mobile -->
    <input type="checkbox" class="dn" id="enter">
    <label class="enter" for="enter">&#9776;</label>
    <!-- Fim: controle mobile -->

    <!-- Inicio: secao desktop -->
    <section id="desktop-section" class="w-100-per">
        <!-- Titulo da secao -->
        <h2 class="font-size-0">Menu para computador</h2>

        <!-- Inicio: navegacao branca contatos -->
        <nav class="white-bar">
            <!-- Titulo da secao -->
            <h3 class="font-size-0">Navegação dos contatos</h3>

            <!-- Inicio: logo -->
            <a class="logo dib ptb20 ml-10" id="logo" href="<?= INCLUDE_PATH ?>">
                <img class="w-120-px" src="<?= INCLUDE_PATH_FULL ?>img/logo.png" alt="logo Las Brisas">
            </a>
            <!-- Fim: logo -->
            <ul>
                <li class="dib mr-25">
                    <i class="fas fa-map-marker-alt font-green"></i>
                    <a href="https://goo.gl/maps/hRRAmpsSShMK7qVC8" target="_blank">Localização</a>
                </li>
                <li class="dib mr-25">
                    <i class="fas fa-phone-alt font-green"></i>
                    <a href="tel:+5507141240051">(71) 4124-0051</a>
                </li>
                <li class="dib mr-25">
                    <i class="fas fa-mobile-alt font-green"></i>
                    <a href="tel:+55071988519487">(71) 9 8851-9487</a>
                </li>
            </ul>
        </nav>
        <!-- Fim: navegacao branca contatos -->

        <!-- Inicio: navegacao verde site -->
        <nav class="green-bar">
            <!-- Titulo da secao -->
            <h3 class="font-size-0">Navegação do site</h3>
            <ul>
                <?php
                    foreach ($this->menuItems as $key => $value) {
                        echo '<li>';
                            echo '<a class="upper" href="'.INCLUDE_PATH.strtolower(implode(explode(' ',$value))).'">'.$value.'</a>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </nav>
        <!-- Fim: navegcao verde site -->
    </section>
    <!-- Fim: secao desktop -->

    <!-- Inicio: secao mobile -->
    <section id="mobile-section">
        <!-- Titulo da secao -->
        <h2 class="font-size-0">Menu para mobile</h2>
        <!-- Incio: navegacao mobile -->
        <div class="mobile-nav">
            <!-- Inicio: avegacao site -->
            <nav>
                <h3 class="font-size-0">Navegação do site</h3>
                <ul>
                    <?php
                        foreach ($this->menuItems as $key => $value) {
                            echo '<li class="ptb20">';
                                echo '<a class="upper" href="'.INCLUDE_PATH.strtolower(implode(explode(' ',$value))).'">'.strtoupper($value).'</a>';
                            echo '</li>';
                        }
                    ?>
                </ul>
            </nav>
            <!-- Fim: navegacao site -->

            <!-- Inicio: navegacao contatos -->
            <nav class="mt-50">
                <h3 class="font-size-0">Navegação dos contatos</h3>
                <ul>
                    <li class="pb30">
                        <i class="fas fa-map-marker-alt font-green"></i>
                        <a href="https://goo.gl/maps/hRRAmpsSShMK7qVC8" target="_blank">Localização</a>
                    </li>
                    <li class="pb30">
                        <i class="fas fa-phone-alt font-green"></i>
                        <a href="tel:+5507141240051">(71) 4124-0051</a>
                    </li>
                    <li class="pb30">
                        <i class="fas fa-mobile-alt font-green"></i>
                        <a href="tel:+55071988519487">(71) 9 8851-9487</a>
                    </li>
                </ul>
            </nav>
            <!-- Fim: navegacao contatos -->
        </div>
        <!-- Fim: navegacao mobile -->
    </section>
    <!-- Fim: secao mobile -->
</header>
