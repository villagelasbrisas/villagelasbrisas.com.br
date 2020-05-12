<?php

    class ReservasController extends Controller
    {

        public function executar(){
			if(isset($_POST['acao'])){
				ReservasModel::enviarFormulario();
				echo '<script>location.href="'.INCLUDE_PATH.'reservas/enviado"</script>';
				die();
			}

			\Router::rota('reservas/enviado',function(){
				$this->view = new MainView('email-enviado');
				$this->view->render(array('titulo'=>'Reservas'));
			});

			\Router::rota('reservas',function(){
				$this->view = new MainView('reservas');
				$this->view->render(array('titulo'=>'Contato'));
			});
		}

    }
