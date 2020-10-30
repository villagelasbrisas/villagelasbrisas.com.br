<?php

	class MainView
	{

		private $pageFile;
        private $title;
        private $css;
        private $scripts;
        private $description;
        private $keywords;
        private $withoutFooter;

        public $publicStyles = ['global', 'menu', 'rules', 'footer'];

        public $publicScripts = [
            'loadGoogleMaps',
        ];

		public function __construct($pageFile, $title, $css = [], $scripts = [], $description, $keywords = [], $withoutFooter = false){
			$this->pageFile = $pageFile;
			$this->title = $title;
			$this->css = $css;
			$this->scripts = $scripts;
			$this->description = $description;
			$this->keywords = $keywords;
			$this->withoutFooter = $withoutFooter;
		}

		public function render($arr = []){
			include('pages/templates/head.php');
            include('pages/'.$this->pageFile.'.php');
            include('pages/templates/footer.php');
		}

	}

?>
