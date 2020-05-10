<?php
    class RegrasController extends Controller
    {

        public function __construct()
		{
			$this->view = new MainView('regras', 'Regras - Village Las Brisas');
		}

		public function executar(){
			$this->view->render(array('titulo'=>'Las Brisas - Vera Cruz - BA'));
		}

    }
