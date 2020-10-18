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
            'Galeria lazer - Village Las Brisas, Vera Cruz - BA',
            'Galeria restaurante - Village Las Brisas, Vera Cruz - BA',
            'Galeria paraquedismo - Village Las Brisas, Vera Cruz - BA',
            'Galeria revéillon - Village Las Brisas, Vera Cruz - BA',
        ];

        private $styles = ['gallery', 'modal'];

        private $scripts = ['photo-modal'];

        private $descriptions = [
            'Meta description 0',
            'Meta description 1',
            'Meta description 2',
            'Meta description 3',
        ];

        private $withoutFooter = false;

		public function __construct()
		{
			$this->view = new MainView($this->fileNames[0], $this->titles[0], $this->styles, $this->scripts, $this->descriptions[0], $this->withoutFooter);
		}

		public function executar(){
            \Router::rota('galeria/lazer',function(){
				$this->view = new MainView($this->fileNames[0], $this->titles[0], $this->styles, $this->scripts, $this->descriptions[0], $this->withoutFooter);
				$this->view->render();
            });

            \Router::rota('galeria/restaurante',function(){
				$this->view = new MainView($this->fileNames[1], $this->titles[1], $this->styles, $this->scripts, $this->descriptions[1], $this->withoutFooter);
				$this->view->render();
            });

            \Router::rota('galeria/paraquedismo',function(){
				$this->view = new MainView($this->fileNames[2], $this->titles[2], $this->styles, $this->scripts, $this->descriptions[2], $this->withoutFooter);
				$this->view->render();
            });

            \Router::rota('galeria/reveillon',function(){
				$this->view = new MainView($this->fileNames[3], $this->titles[3], $this->styles, $this->scripts, $this->descriptions[3], $this->withoutFooter);
				$this->view->render();
			});

		}

    }
?>
