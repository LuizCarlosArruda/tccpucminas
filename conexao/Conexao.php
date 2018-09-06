<?php

// Busca parametros de acesso a base de dados

require_once 'config.php';

// Constroi a conexão com a base d edados

header("Conten-Type:application/json");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$connection) 
	{
 	echo '[{"Não foi possível conectar ao banco"';
 	echo '}]';
 	exit;
 	}
?>