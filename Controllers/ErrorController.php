<?php

	class ErrorController extends Controller
	{

		public function __construct()
		{
			$this->view = new MainView('404', 'Erro - Village Las Brisas', 'header-404', '');
		}

		public function executar(){
			$this->view->render(array());
		}
	}
?>
