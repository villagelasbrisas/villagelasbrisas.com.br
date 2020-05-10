<?php
    class ReservasController extends Controller
    {

        public function __construct()
		{
			$this->view = new MainView('reservas', 'Reservas - Village Las Brisas');
		}

        public function executar()
        {
			$this->view->render(array('titulo'=>'Las Brisas - Vera Cruz - BA'));
        }

        public function mail()
        {
            header('Location: galerias.php');
        }

    }
