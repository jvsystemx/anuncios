<?php

namespace Controllers;

use \Core\Controller;
use \Models\Anuncios;

class PostController extends Controller {

	public function go($slug = null){
	  $data = [];
	 
	  $anuncios = new Anuncios();
	  $anuncioAtual = $anuncios->getBySlug($slug);
	  
	  // se nao existir o slug ou nao tiver no banco
	   if(!$slug || !$anuncioAtual){
	   		$busca = $anuncios->buscaPosts($slug);
		    $data['busca'] = $anuncioAtual;
	   }
	 
	 
	  //pega todas as categorias
	  $data['lista'] = $anuncios->getAllCategories();
	  
	  //faz update nas visitas desse slug recebido
	  $anuncios->inserindoVisitas($slug);
	  
	  //pega o total de visitas desse slug recebido
	  $data['total_visitas'] = $anuncios->totalVisitasPorSlug($slug);
	  
	   //pega os dados referente ao slug recebido
	  $data['info'] = $anuncioAtual;
	  $data['relatedPosts'] = $anuncios->relatedPosts($slug);

	 	/*********************** PESQUISA *********************************/

		$busca = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_SPECIAL_CHARS);

		if (isset($busca) and !empty($busca)) {
			$pesquisa = $anuncios->buscarPosts($busca);
			$data['pesquisa'] = $pesquisa;
			//var_dump($pesquisa);
			$data['error'] = $busca;
		}else{
			header("Location".url());
			var_dump($pesquisa);
		}

		/*******************************************************************/

	  $this->loadTemplate('post', $data);
	}
}