<?php

    if ($_SERVER["SERVER_NAME"] == "localhost") {
        $env_url = "http://localhost/villagelasbrisas.com.br/";
    } elseif ($_SERVER["SERVER_NAME"] == "villagelasbrisas") {
        $env_url = "https://www.villagelasbrisas.com.br/";
    } else {
        $env_url = "http://www.dev.villagelasbrisas.com.br/";
    }

    define('INCLUDE_PATH',$env_url);
    define('INCLUDE_PATH_FULL',$env_url . "Views/pages/");

?>
