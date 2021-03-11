<?php

namespace Models;

use \Core\Model;
use PDO;

class Anuncios extends Model {
	
	// LER AS CATEGORIAS
	public function getAllCategories() {
		$data = [];


		$param = $this->db->prepare("SELECT * FROM categorias");
		$param->execute();

		if($param->rowCount() > 0) {
			$data = $param->fetchAll();
		}

		return $data;
	}

	// MOSTRA O TOTAL DE POST 
	public function getTotal() {
		$data = [];

		$param = $this->db->query("SELECT COUNT(*) AS Total FROM anuncios LEFT JOIN categorias ON anuncios.category_id = categorias.id LEFT JOIN imagens ON anuncios.images_id = imagens.id ORDER BY anuncios.create_at  DESC ");
		
		$data = $param->fetch();
		
		return $data['Total'];
	}

	// LISTAR TODOS OS LINKS DA HOME DOS Ultimos Anuncios
	public function getUltimosAnuncios($offset, $limit) { 
	 	$data = []; 
	 	 
	 	$param = $this->db->prepare("SELECT * FROM anuncios LEFT JOIN categorias ON anuncios.category_id = categorias.id LEFT JOIN imagens ON anuncios.images_id = imagens.id ORDER BY anuncios.create_at ASC LIMIT :limit OFFSET :offset");  

	    $param->bindValue(":offset", $offset, PDO::PARAM_INT);  
		$param->bindValue(":limit", $limit, PDO::PARAM_INT);   
		$param->execute();  
		
		if($param->rowCount() > 0) {   
			$data = $param->fetchAll();  
		}  

		 return $data;
 	}


	// INSERINDO AS VISITAS
	public function inserindoVisitas($slug){
		$stmt = $this->db->prepare("UPDATE anuncios SET visitas = visitas +1 WHERE slugUrl = :slug");
		$stmt->bindValue(":slug", $slug);
	 
		return $stmt->execute();
	}

 	// TOTAL DE VISITAS POR LINK(SLUG)
	public function totalVisitasPorSlug($slug){
		$data = [];
		
		$stmt = $this->db->prepare("SELECT visitas FROM anuncios WHERE slugUrl = :slug LIMIT 1");
		$stmt->bindValue(":slug", $slug);
	 
		$stmt->execute();
	 
		$result = $stmt->fetch();
	 
		if($result){$data = $result;}	
 
		return $data;
	}

	// EXIBE TUDOS OS LINKS 
	public function getBySlug($slug ){
	    $data = [];

		$stmt = $this->db->prepare("SELECT a.*, c.category AS category, i.image AS image FROM anuncios AS a LEFT JOIN categorias AS c ON a.category_id = c.id LEFT JOIN imagens AS i ON a.images_id = i.id WHERE a.slugUrl = :slug");

		$stmt->bindValue(":slug", $slug);
		$stmt->execute();
	 
		$result = $stmt->fetchAll();
	 
		if(count($result) > 0){
			$data = $result;
		}	
	 
		return $data;
	}

	// FAZ A BUSCAR DO POST
	public function buscaPosts($slug){
		$data = [];

		$stmt = $this->db->prepare("SELECT a.*, c.category AS category, i.image AS image FROM anuncios AS a INNER JOIN categorias AS c ON a.category_id = c.id INNER JOIN imagens AS i ON a.images_id = i.id WHERE LIKE a.slugUrl LIKE :slug");

		$stmt->bindValue(":slug", $slug);
		$stmt->execute();
	 
		$result = $stmt->fetchAll();
	 
		if(count($result) > 0){
			$data = $result;
		}	
	 
		return $data;
	}

	// Anuncios FIXOS  
	public function fixedAnuncios(){
		$data = [];
		
		$param = $this->db->query("SELECT a.*, c.category AS category, i.image AS image FROM anuncios AS a INNER JOIN categorias AS c ON a.category_id = c.id INNER JOIN imagens AS i ON a.images_id = i.id WHERE a.fixed = 1 LIMIT 3");

		
		if ($param->rowCount() > 0 ) {
			$data = $param->fetchAll();
		}
		
		return $data;
	}


	// POSTS RELACIONADOS 
	public function relatedPosts($slug){
		$data = [];

		$param = $this->db->prepare("SELECT DISTINCT a.*, c.category AS category, i.image AS image FROM anuncios AS a LEFT JOIN categorias AS c ON a.category_id = c.id LEFT JOIN imagens AS i ON a.images_id = i.id WHERE a.slugUrl != :slug ORDER BY rand() LIMIT 6 ");

		$param->bindValue(":slug", $slug);
		$param->execute();

		if ($param->rowCount() > 0) {
			$data = $param->fetchAll();
		}

		return $data;

	}

	// BUSCAR POR POSTS 
	public function buscarPosts($campo = null){
		$data = [];

		$sec = "%{$campo}%";
		$busca = htmlentities($sec);
		
		$param = $this->db->prepare("SELECT a.*, c.category AS category, i.image AS image FROM anuncios AS a LEFT JOIN categorias AS c ON a.category_id = c.id LEFT JOIN imagens AS i ON a.images_id = i.id WHERE a.titulo LIKE :busca OR a.slugUrl LIKE :busca2");
		
		$param->bindValue(":busca", $busca);
		$param->bindValue(":busca2", $busca);
		$param->execute();


		if ($param->rowCount() > 0) {
			$data = $param->fetchAll();
		}

		return $data;
	}
}