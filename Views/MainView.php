<?php

	class MainView
	{

		private $pageFile;
        private $title;
        private $css;
        private $scripts;
        private $description;
        private $withoutFooter;

		public $menuItems = ['Village', 'Acomodacoes', 'Regras', 'Galerias', 'Reservas'];

		public function __construct($pageFile, $title, $css = [], $scripts = [], $description, $withoutFooter = false){
			$this->pageFile = $pageFile;
			$this->title = $title;
			$this->css = $css;
			$this->scripts = $scripts;
			$this->description = $description;
			$this->withoutFooter = $withoutFooter;
		}

		public function render($arr = []){
			include('pages/templates/head.php');
            include('pages/'.$this->pageFile.'.php');
            include('pages/templates/footer.php');
		}

	}

?>
