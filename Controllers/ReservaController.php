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
                ReservasModel::submitForm();

                echo '<script>location.href="'.INCLUDE_PATH.'reserva/enviado"</script>';
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

    }
