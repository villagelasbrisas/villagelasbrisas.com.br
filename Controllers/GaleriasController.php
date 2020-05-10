<?php
    class GaleriasController extends Controller
    {

        public function __construct()
		{
			$this->view = new MainView('galerias', 'Galerias - Village Las Brisas');
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
