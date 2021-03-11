<?php 

namespace Controllers;

use \Core\Controller;
use \Models\Contato;


class ContatoController extends Controller{
	
	public function index() {
		$data = [];

		
			
		$this->loadView('contato', $data);
	}

	
}