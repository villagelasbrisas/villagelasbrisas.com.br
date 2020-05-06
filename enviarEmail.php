<?php
$para = "reservas@villagelasbrisas.com.br";
$assunto = "Reserva site";

$nome = $_POST['nome'];
$email = $_POST['email'];
$adultos = $_POST['adultos'];
$criancas = $_POST['criancas'];
$entrada = $_POST['entrada'];
$saida = $_POST['saida'];

$mensagem  = "<strong>Nome: </strong> $nome <br>";
$mensagem .= "<strong>Adultos: </strong> $adultos <br>";
$mensagem .= "<strong>Crianças (5 anos): </strong> $criancas <br>";
$mensagem .= "<strong>Entrada: </strong> $entrada <br>";
$mensagem .= "<strong>Saída: </strong> $saida <br>";
$mensagem .= "<strong>Mensagem: </strong>".$_POST['mensagem'];

$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  $nome<$email>\n"; 
$headers .= "X-Sender:  <$email>\n"; 
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <$email>\n"; 
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $assunto, $mensagem, $headers);

header('Location: https://www.villagelasbrisas.com.br/reservas');