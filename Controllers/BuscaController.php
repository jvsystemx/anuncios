<?php

namespace Controllers;

use \Core\Controller;
use \Models\Anuncios;

class BuscaController extends Controller {

	public function go($slug = null){
	  $data = [];
	 
	  
	 	if(isset($_POST['q'])) { 
			
			
			$anuncios = new Anuncios();

			$searchBox = $anuncios->buscarPosts(filter_var($_POST['q'], FILTER_SANITIZE_STRING));
			
	   		$data['search'] = $searchBox;
	   	}
	 
	  $this->loadTemplate('busca', $data);
	}
}