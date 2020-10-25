<?php

    $isLocalEnvironment = $_SERVER['SERVER_NAME'] == 'localhost';

    $isDevEnvironment = $_SERVER['SERVER_NAME'] == 'www.dev.villagelasbrisas.com.br'
        || $_SERVER['SERVER_NAME'] == 'dev.villagelasbrisas.com.br';

    $isProdEnvironment = $_SERVER['SERVER_NAME'] == 'www.villagelasbrisas.com.br'
        || $_SERVER['SERVER_NAME'] == 'villagelasbrisas.com.br';

    if ($isLocalEnvironment) $env_url = 'http://localhost/villagelasbrisas.com.br/';

    if ($isDevEnvironment) $env_url = 'https://www.dev.villagelasbrisas.com.br/';

    if ($isProdEnvironment) $env_url = 'https://www.villagelasbrisas.com.br/';

    define('INCLUDE_PATH', $env_url);
    define('INCLUDE_PATH_FULL', $env_url . 'Views/pages/');

?>
