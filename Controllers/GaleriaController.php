<?php
    class GaleriaController extends Controller
    {

        private $fileNames = [
            'gallery-recreation',
            'gallery-restaurant',
            'gallery-skydiving',
            'gallery-reveillon',
        ];

        private $titles = [
            'Lazer | Village Las Brisas, Ilha de Itaparica - BA',
            'Restaurante | Village Las Brisas, Ilha de Itaparica - BA',
            'Paraquedismo | Village Las Brisas, Ilha de Itaparica - BA',
            'Revéillon | Village Las Brisas, Ilha de Itaparica - BA',
        ];

        private $styles = ['gallery', 'modal'];

        private $scripts = ['photo-modal'];

        private $descriptions = [
            'Confira agora espaços de lazer do Village Las Brisas, como: praia, piscinas, parque de diversão, churrasqueira, quadra de vôlei...',
            'Veja agora fotos do nosso restaurante, localizado dentro da pousada. Ofertamos café da manhã para hóspedes, mediante solicitação prévia de grupos.',
            'Já deu uma olhadinha nas fotos de paraquedismo que nós temos? Saltos realizados por hóspedes, aterrisando em frente à pousada.',
            'Confira as fotos do Revéillon que realizamos anualmente na pousada. Evento celebrado durante o pacote de ano novo, com queima de fogos na praia de Barra Grande.',
        ];

        private $keywords = [
            [
                'pousada',
                'piscina',
                'churrasqueira',
                'praia',
                'ilha de itaparica',
                'barra grande',
                'vera cruz',
                'village',
                'las brisas',
                'village las brisas',
            ],
            [
                'pousada',
                'restaurante',
                'barra grande',
                'cafe da manha',
                'reserva',
                'ilha de itaparica',
                'vera cruz',
                'village',
                'las brisas',
                'village las brisas',
            ],
            [
                'pousada',
                'paraquedismo',
                'fotos',
                'galeria',
                'barra grande',
                'ilha de itaparica',
                'vera cruz',
                'village',
                'las brisas',
                'village las brisas',
            ],
            [
                'pousada',
                'reveillon',
                'ano novo',
                'barra grande',
                'fogos',
                'pacote',
                'reserva',
                'ilha de itaparica',
                'vera cruz',
                'village',
                'las brisas',
                'village las brisas',
            ],
        ];

        private $withoutFooter = false;

		public function executar(){
            \Router::rota('galeria/lazer',function(){
				$this->view = new MainView($this->fileNames[0], $this->titles[0], $this->styles, $this->scripts, $this->descriptions[0], $this->keywords[0], $this->withoutFooter);
				$this->view->render();
            });

            \Router::rota('galeria/restaurante',function(){
				$this->view = new MainView($this->fileNames[1], $this->titles[1], $this->styles, $this->scripts, $this->descriptions[1], $this->keywords[1], $this->withoutFooter);
				$this->view->render();
            });

            \Router::rota('galeria/paraquedismo',function(){
				$this->view = new MainView($this->fileNames[2], $this->titles[2], $this->styles, $this->scripts, $this->descriptions[2], $this->keywords[2], $this->withoutFooter);
				$this->view->render();
            });

            \Router::rota('galeria/reveillon',function(){
				$this->view = new MainView($this->fileNames[3], $this->titles[3], $this->styles, $this->scripts, $this->descriptions[3], $this->keywords[3], $this->withoutFooter);
				$this->view->render();
            });
		}
    }
?>
