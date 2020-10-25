<?php

    class ReservaController extends Controller
    {

        private $title = 'Reserve Agora | Village Las Brisas, Ilha de Itaparica - BA';

        private $styles = ['reservations'];

        private $scripts = [];

        private $description = 'Faça agora sua reserva no Las Brisas, a melhor pousada da Ilha de Itaparica, localizada no bairro de Barra Grande, Vera Cruz - BA.';

        private $keywords = [
            'reserva',
            'valores',
            'diaria',
            'pacote',
            'ilha de itaparica',
            'barra grande',
            'hospedagem',
            'pousada',
            'vera cruz',
            'village',
            'las brisas',
            'village las brisas',
            'hotel',
        ];

        private $withoutFooter = false;

        public function executar(){
			if(isset($_POST['mail-sended'])){
                $this->submitForm();

                $this->view = new MainView('mail-sended', $this->title, $this->styles, $this->scripts, null, null,  $this->withoutFooter);
				$this->view->render();
			}

			\Router::rota('reserva/enviado',function(){
				$this->view = new MainView('mail-sended', $this->title, $this->styles, $this->scripts, null, null,  $this->withoutFooter);
				$this->view->render();
			});

			\Router::rota('reserva',function(){
				$this->view = new MainView('reservations', $this->title, $this->styles, $this->scripts, $this->description, $this->keywords,  $this->withoutFooter);
				$this->view->render();
			});
        }

        private static function submitForm() {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $adults = $_POST['adults'];
            $kids = $_POST['kids'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $message = $_POST['message'];

            $reservaController = new reservaController();
            $checkin = $reservaController->formatDate($checkin);
            $checkout = $reservaController->formatDate($checkout);

            $subject = "Reserva site: $name";
            $sendTo = "reservas@villagelasbrisas.com.br";
            $headers = $reservaController->createHeaders($name, $email);
            $body = $reservaController->createBody($name, $adults, $kids, $checkin, $checkout, $message);

            return $reservaController->sendMail($sendTo, $subject, $body, $headers);
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
