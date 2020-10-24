<?php

	class HomeController extends Controller
	{

        private $fileName = 'home';

        private $title = 'Las Brisas | Pousada em Barra Grande - Ilha de Itaparica - BA';

        private $styles = ['home', 'slider'];

        private $scripts = [];

        private $description = 'Localizado em Barra Grande - Vera Cruz, na Ilha de Itaparica, o Village Las Brisas é um paraíso de tranquilidade e diversão para toda família.';

        private $keywords = [
            'pousada',
            'ilha de itaparica',
            'barra grande',
            'vera cruz',
            'village',
            'las brisas',
            'village las brisas',
            'reservas',
            'hospedagem',
            'hotel',
        ];

        private $withoutFooter = false;

		public function __construct()
		{
			$this->view = new MainView($this->fileName, $this->title, $this->styles, $this->scripts, $this->description, $this->keywords,  $this->withoutFooter);
		}

		public function executar(){
			$this->view->render();
		}
	}
?>
