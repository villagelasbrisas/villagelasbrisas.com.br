<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Meta config -->
    <meta charset="UTF-8">
    <meta name="theme-color" content="#10AC84" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google SEO -->
    <meta http-equiv="content-language" content="pt-BR">
    <meta name="target_country" content="br">
    <meta name="author" content="Guilherme Caires - www.github.com/gcairesdev">
    <meta name="reply-to" content="reservas@villagelasbrisas.com.br">
    <?php
        if ($this->keywords) {
            echo '<meta name="keywords" content="';
                foreach($this->keywords as $keyword) {
                    $i++;
                    echo $keyword;
                    if ($i < count($this->keywords)) echo ', ';
                }
            echo "\">\n    ";
        }

        if ($this->description) {
            echo "<meta name=\"description\" content=\"$this->description\">\n    ";
            echo "<meta name=\"robots\" content=\"index, follow\">\n";
        } else {
            echo "<meta name=\"robots\" content=\"noindex, follow\">\n";
        }

    ?>
    <!-- Favicons -->
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-16.png" sizes="16x16">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-48.png" sizes="48x48">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-64.png" sizes="64x64">
    <link rel="icon" href="<?= INCLUDE_PATH_FULL ?>img/icons/favicon-128.png" sizes="128x128">
    <link rel="shortcut icon" href="<?= INCLUDE_PATH_FULL ?>img/favicon.ico" type="image/x-icon"/>
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <!-- JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Titulo -->
	<title><?= $this->title ?></title>
</head>
<body>
