<?php

	class ReservasModel{

		public static function enviarFormulario(){

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $adultos = $_POST['adultos'];
            $criancas = $_POST['criancas'];
            $entrada = $_POST['entrada'];
            $saida = $_POST['saida'];

            $reservas = new ReservasModel();
            $entrada = $reservas->formatDate($entrada);
            $saida = $reservas->formatDate($saida);

            $body  = "<strong>Nome: </strong> $nome <br>";
            $body .= "<strong>Adultos: </strong> $adultos <br>";
            $body .= "<strong>Crianças (5 anos): </strong> $criancas <br>";
            $body .= "<strong>Entrada: </strong> $entrada <br>";
            $body .= "<strong>Saída: </strong> $saida <br>";
            $body .= "<strong>Mensagem: </strong>".$_POST['mensagem'];

            $headers =  "Content-Type:text/html; charset=UTF-8\n";
            $headers .= "From:  $nome<$email>\n";
            $headers .= "X-Sender:  <$email>\n";
            $headers .= "X-Mailer: PHP  v".phpversion()."\n";
            $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
            $headers .= "Return-Path:  <$email>\n";
            $headers .= "MIME-Version: 1.0\n";

            $sendTo = "reservas@villagelasbrisas.com.br";
            $subject = "Reserva site: $nome";

            mail($sendTo, $subject, $body, $headers);

        }

        private function formatDate($date){

            $arr = explode('-', $date);
            $date = $arr[2] . '/';
            $date .= $arr[1] . '/';
            $date .= $arr[0];

            return $date;
        }

	}

?>
