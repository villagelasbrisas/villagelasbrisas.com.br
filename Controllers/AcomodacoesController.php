<?php

	class AcomodacoesController extends Controller
	{

		public function __construct()
		{
			$this->view = new MainView('acomodacoes', 'Acomodações - Village Las Brisas');
		}

		public function executar(){
			$this->view->render(array('titulo'=>'Las Brisas - Vera Cruz - BA'));
		}
	}
?>
