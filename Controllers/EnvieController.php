<?php
namespace Controllers;

use \Core\Controller;
use \Models\Anuncios;

class EnvieController extends Controller {
	

	public function index() {
		$data = [];

		$anuncioS = new Anuncios();

		// FAZ O UPLOAD DAS IMAGES 
		if (isset($_POST['salvar']) || !empty($_POST['salvar'])) {
			$titulo = addslashes($_POST['titulo']);
			$link = addslashes($_POST['link']);
			$categoria = addslashes($_POST['categoria']);
			$texto = addslashes($_POST['texto']);
			$image = [];

			if (isset($_FILES['image'])) {
				for ($i = 0; $i < count($image); $i++) { 
					$nome_arquivo = $_FILES['tmp_name']['name'][$i];
					//var_dump($nome_arquivo);
					move_uploaded_file($_FILES['image']['tmp_name'], "storage/images");
					array_push($image, $nome_arquivo);
				}
			}
		}

		if (!empty($titulo) && !empty($link) && !empty($texto)) {
			
		}else{
			
		}

		//var_dump();

		$this->loadTemplate('envie',$data);
	}

}