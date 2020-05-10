<?php

	class MainView
	{

		private $fileName;
		private $header;
		private $footer;
        private $titulo;

		public $menuItems = array('Village','Acomodacoes','Regras', 'Galerias','Reservas');

		public function __construct($fileName, $titulo = 'Village Las Brisas - Vera Cruz - BA', $header = 'header', $footer = 'footer'){
			$this->fileName = $fileName;
			$this->header = $header;
			$this->footer = $footer;
			$this->titulo = $titulo;
		}

		public function render($arr = []){
			include('pages/templates/'.$this->header.'.php');
			include('pages/'.$this->fileName.'.php');
			include('pages/templates/'.$this->footer.'.php');
		}

	}

?>
