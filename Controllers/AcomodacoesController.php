<?php

	class AcomodacoesController extends Controller
	{

        private $fileName = 'allocations';

        private $title = 'Nossas Acomodações | Village Las Brisas - Ilha de Itaparica - BA';

        private $styles = ['allocations', 'modal'];

        private $scripts = ['photo-modal'];

        private $description = 'Possuímos acomodações para suportar 02 à 06 pessoas, com ar-condicionado, televisão, cozinha montada (fogão, geladeira e utensílhos) e banheiro privativo.';

        private $keywords = [
            'pousada',
            'acomodacoes',
            'quartos',
            'apartamento',
            'suite',
            'ar condicionado',
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
			$this->view = new MainView($this->fileName, $this->title, $this->styles, $this->scripts, $this->description, $this->keywords, $this->withoutFooter);
		}

		public function executar(){
			$this->view->render();
		}
	}
?>
