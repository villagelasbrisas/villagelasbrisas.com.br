<?php

	class Application
	{

		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){

				$controler = new $url();
				$controler->executar();
			}else{
				$controler = new ErrorController();
				$controler->executar();
			}
		}
	}

?>
