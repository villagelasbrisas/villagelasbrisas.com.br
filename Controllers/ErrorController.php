<?php

	class ErrorController extends Controller
	{

		private $fileName = '404';

        private $title = 'Página não encontrada - Village Las Brisas';

        private $styles = ['404'];

        private $scripts = [];

        private $description = null;

        private $keywords = null;

        private $withoutFooter = true;

		public function __construct()
		{
			$this->view = new MainView($this->fileName, $this->title, $this->styles, $this->scripts, $this->description, $this->keywords, $this->withoutFooter);
		}

		public function executar(){
			$this->view->render();
		}
	}
?>
