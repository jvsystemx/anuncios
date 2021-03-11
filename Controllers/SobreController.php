<?php
namespace Controllers;

use \Core\Controller;
use \Models\Anuncios;

class SobreController extends Controller {

	public function index() {
		$data = [];
		
			
		$this->loadViewInTemplate('sobre', $data);
	}

}