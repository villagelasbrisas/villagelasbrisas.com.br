<?php

    if ($_SERVER["SERVER_NAME"] == "localhost") {
        $env_url = "http://localhost/villagelasbrisas.com.br/";
    } else {
        $env_url = "https://www.villagelasbrisas.com.br/";
    }

    define('INCLUDE_PATH',$env_url);
    define('INCLUDE_PATH_FULL',$env_url . "Views/pages/");

?>
