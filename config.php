<?php
require 'environment.php';

$config = [];

if(ENVIRONMENT == 'developement') {
	define("BASE_URL", "https://exospherical-rainco.000webhostapp.com");// URL DO SEU SITE
	$config['dbname'] = 'id11510103_production';	// NOME DO SEU BANCO DE DADOS
	$config['host'] = 'localhost';// HOST DO SERVIDOR DE BANCOD DE DADOS
	$config['dbuser'] = 'id11510103_production_teste';//USUARIO DE SEU BANCO DE DAOS
	$config['dbpass'] = '?x[UJf8j/X>0#FS_';//SENHA DO SE BANCO DE DADOS
} else {
    define("BASE_URL", "http://localhost/agregador");// URL DO SEU SITE
	$config['dbname'] = 'agregador';	// NOME DO SEU BANCO DE DADOS
	$config['host'] = 'localhost';// HOST DO SERVIDOR DE BANCOD DE DADOS
	$config['dbuser'] = 'root';//USUARIO DE SEU BANCO DE DAOS
	$config['dbpass'] = '';//SENHA DO SE BANCO DE DADOS
	
    
}

global $db;

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
}