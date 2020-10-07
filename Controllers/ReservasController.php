<?php

    class ReservasController extends Controller
    {

        private $title = 'Reservas - Village Las Brisas';

        private $styles = [
            'slider',
            'menu',
        ];

        private $scripts = [
            'font-awesome/solid.min',
            'font-awesome/fontawesome.min',
            'loadGoogleMaps',
            'getButtonIo/index'
        ];

        private $description = "Localizado na Ilha de Itaparica, no munício de Vera Cruz - BA, o Village Las Brisas é um paraíso de tranquilidade e diversão para família. Com um ambiente familiar, nós somos sua melhor opção de hospedagem, venha desfrutar da paz e diversão conosco!!";

        private $withoutFooter = false;

        public function executar(){
			if(isset($_POST['acao'])){
				ReservasModel::enviarFormulario();
				echo '<script>location.href="'.INCLUDE_PATH.'reservas/enviado"</script>';
				die();
			}

			\Router::rota('reservas/enviado',function(){
				$this->view = new MainView('reservas', $this->title, $this->styles, $this->scripts, $this->description, $this->withoutFooter);
				$this->view->render();
			});

			\Router::rota('reservas',function(){
				$this->view = new MainView('email-eviado', $this->title, $this->styles, $this->scripts, $this->description, $this->withoutFooter);
				$this->view->render();
			});
		}

    }
