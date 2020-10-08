<?php
    class GaleriasController extends Controller
    {

        private $fileName = 'galerias';

        private $title = 'Galerias - Village Las Brisas';

        private $styles = ['gallery'];

        private $scripts = [];

        private $description = "Localizado na Ilha de Itaparica, no munício de Vera Cruz - BA, o Village Las Brisas é um paraíso de tranquilidade e diversão para família. Com um ambiente familiar, nós somos sua melhor opção de hospedagem, venha desfrutar da paz e diversão conosco!!";

        private $withoutFooter = false;

		public function __construct()
		{
			$this->view = new MainView($this->fileName, $this->title, $this->styles, $this->scripts, $this->description, $this->withoutFooter);
		}

		public function executar(){
            \Router::rota('galerias/lazer',function(){
				$this->view = new MainView('galeria-lazer');
				$this->view->render(array('titulo'=>'Lazer'));
            });

            \Router::rota('galerias/restaurante',function(){
				$this->view = new MainView('galeria-restaurante');
				$this->view->render(array('titulo'=>'Restaurante'));
            });

            \Router::rota('galerias/paraquedismo',function(){
				$this->view = new MainView('galeria-paraquedismo');
				$this->view->render(array('titulo'=>'Paraquedismo'));
            });

            \Router::rota('galerias/reveillon',function(){
				$this->view = new MainView('galeria-reveillon');
				$this->view->render(array('titulo'=>'Reveillon'));
			});

			$this->view->render(array('titulo'=>'Galerias'));
		}

    }
