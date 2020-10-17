<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Meta config -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google SEO -->
    <meta http-equiv="content-language" content="pt-BR">
    <meta name="target_country" content="br">
    <meta name="author" content="Guilherme Caires - www.github.com/gcairesdev">
    <meta name="reply-to" content="reservas@villagelasbrisas.com.br">
    <meta name="keywords" content="village,las brisas,pousada,ilha,Itaparica,Barra Grande,Vera Cruz,Bahia,reservas,hospedagem,barata,hotel">
    <meta name="description" content="<?= $this->description ?>">
    <meta name="robots" content="index,follow">
    <!-- Favicons -->
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-16.png" sizes="16x16">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-48.png" sizes="48x48">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-64.png" sizes="64x64">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-128.png" sizes="128x128">
    <link rel="shortcut icon" href="<?= INCLUDE_PATH_FULL ?>img/favicon.ico" type="image/x-icon"/>
    <!-- CSS -->
    <?php
        if($this->publicStyles) {
            foreach($this->publicStyles as $style) {
                echo "\n<link rel=\"stylesheet\" href=\"" .INCLUDE_PATH_FULL. "css/" .$style. ".css\">";
            }
        }

        if($this->css) {
            foreach($this->css as $cssItem) {
                echo "\n<link rel=\"stylesheet\" href=\"" .INCLUDE_PATH_FULL. "css/" .$cssItem. ".css\">";
            }
        }
    ?>
    <!-- Titulo -->
	<title><?= $this->title ?></title>
</head>
<body>
