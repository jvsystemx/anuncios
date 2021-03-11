<?php
namespace Controllers;

use \Core\Controller;
use \Models\Anuncios;

class CategoryController extends Controller {
	public function __construct(){
		$anuncio = new Anuncios();
		// LISTA TODAS  AS CATEGORIAS 
		$data['lista'] = $anuncio->getAllCategories();
		//$data['filterCategory'] =  $anuncio->filterCategory();
		
		//$data['listaLink'] = $anuncio->getAll();
	}

	public function index() {
		$data = [];	
		$this->loadTemplate('category', $data);
	}

}