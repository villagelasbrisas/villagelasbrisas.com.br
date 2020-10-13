<?php

	class ReservasModel{

		public static function submitForm() {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $adults = $_POST['adults'];
            $kids = $_POST['kids'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $message = $_POST['message'];

            $reservasModel = new ReservasModel();
            $checkin = $reservasModel->formatDate($checkin);
            $checkout = $reservasModel->formatDate($checkout);

            $subject = "Reserva site: $name";
            $sendTo = "reservas@villagelasbrisas.com.br";
            $headers = $reservasModel->createHeaders($name, $email);
            $body = $reservasModel->createBody($name, $adults, $kids, $checkin, $checkout, $message);

            return $reservasModel->sendMail($sendTo, $subject, $body, $headers);
        }

        private function sendMail($sendTo, $subject, $body, $headers) {
            return mail($sendTo, $subject, $body, $headers);
        }

        private function createHeaders($name, $email) {
            $headers =  "Content-Type:text/html; charset=UTF-8\n";
            $headers .= "From:  $name<$email>\n";
            $headers .= "X-Sender: <$email>\n";
            $headers .= "X-Mailer: PHP  v".phpversion()."\n";
            $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
            $headers .= "Return-Path:  <$email>\n";
            $headers .= "MIME-Version: 1.0\n";

            return $headers;
        }

        private function createBody($name, $adults, $kids, $checkin, $checkout, $message) {
            $body  = "<strong>Nome: </strong> $name <br>";
            $body .= "<strong>Adultos: </strong> $adults <br>";
            $body .= "<strong>Crianças (5 anos): </strong> $kids <br>";
            $body .= "<strong>Entrada: </strong> $checkin <br>";
            $body .= "<strong>Saída: </strong> $checkout <br>";
            $body .= "<strong>Mensagem: </strong>".$message;

            return $body;
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
