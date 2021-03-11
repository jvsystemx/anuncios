<?php
namespace Controllers;

use \Core\Controller;
use \Models\Anuncios;

class HomeController extends Controller {

	public function index() {
		$data = [];
		
		
		$anuncios = new Anuncios();

		/*******************************************************************************/
		//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
		$pagina = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
		$pagina = (isset($pagina)? (int)$pagina : 1);

		//Seta a quantidade de posts por pagina
		$quantidade_pg = 12;
		
		$total_registros = $anuncios->getTotal();
		$range = 3;

		//Calcular o inicio da visualizacao
		$inicio = (($quantidade_pg * $pagina) - $quantidade_pg);

		//calcular o número de pagina necessárias para apresentar os posts
		$num_pagina = ceil($total_registros / $quantidade_pg);
		$paginaAtual = $pagina;

		//Verificar a pagina anterior e posterior
		$previous = $pagina - 1;
		$next = $pagina + 1;
		
		$data['previous'] = $previous;
		$data['next'] 	  = $next;

		$data['range']  = $range;
		$data['maximo'] = $quantidade_pg; 
		$data['total']  = $total_registros;

		$data['paginaAtual'] = 1;

		$data['pagina'] = $pagina;
		$data['total_paginas'] = $num_pagina;

		
		$data['listagem'] = $anuncios->getUltimosAnuncios($inicio, $quantidade_pg);

		/*******************************************************************/

		$data['fixed'] = $anuncios->fixedAnuncios();
		//$data['filter'];

		/*********************** PESQUISA *********************************/

		$busca = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_SPECIAL_CHARS);

		if (isset($busca) and !empty($busca)) {
			$pesquisa = $anuncios->buscarPosts($busca);
			$data['pesquisa'] = $pesquisa;
			//var_dump($pesquisa);
			$data['error'] = $busca;
		}else{
			header("Location".url());
		}

		/*******************************************************************/
		 $data['relacionados'] = $anuncios->relatedPosts($busca);

		$this->loadTemplate('home', $data);
	}

}