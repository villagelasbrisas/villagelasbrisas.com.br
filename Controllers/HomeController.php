<?php

	class HomeController extends Controller
	{

        private $fileName = 'home';

        private $title = 'Village Las Brisas - Vera Cruz, BA';

        private $styles = ['home', 'slider'];

        private $scripts = [];

        private $description = "Localizado na Ilha de Itaparica, no munício de Vera Cruz - BA, o Village Las Brisas é um paraíso de tranquilidade e diversão para família. Com um ambiente familiar, nós somos sua melhor opção de hospedagem, venha desfrutar da paz e diversão conosco!!";

        private $withoutFooter = false;

		public function __construct()
		{
			$this->view = new MainView($this->fileName, $this->title, $this->styles, $this->scripts, $this->description, $this->withoutFooter);
		}

		public function executar(){
			$this->view->render();
		}
	}
?>
