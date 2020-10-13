<?php

    class ReservasController extends Controller
    {

        private $title = 'Reservas - Village Las Brisas';

        private $styles = ['reservations'];

        private $scripts = [];

        private $description = "Localizado na Ilha de Itaparica, no munício de Vera Cruz - BA, o Village Las Brisas é um paraíso de tranquilidade e diversão para família. Com um ambiente familiar, nós somos sua melhor opção de hospedagem, venha desfrutar da paz e diversão conosco!!";

        private $withoutFooter = false;

        public function executar(){
			if(isset($_POST['mail-sended'])){
                ReservasModel::submitForm();

                echo '<script>location.href="'.INCLUDE_PATH.'reservas/enviado"</script>';
			}

			\Router::rota('reservas/enviado',function(){
				$this->view = new MainView('mail-sended', $this->title, $this->styles, $this->scripts, $this->description, $this->withoutFooter);
				$this->view->render();
			});

			\Router::rota('reservas',function(){
				$this->view = new MainView('reservations', $this->title, $this->styles, $this->scripts, $this->description, $this->withoutFooter);
				$this->view->render();
			});
		}

    }
