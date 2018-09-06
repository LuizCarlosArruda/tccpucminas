<?php

/*
API de leitura de registros da base cliente
Banco de Dados Mysql 5.1
Plataforma LINUX 5.2
Linguagem PHP versão 7.1
suportados os metodos GET, PUT, POST, DELETE
Chaves primarias na base: cpf e email - Não pode ocorrer 2 emails iguais ou dois cpfs iguais 

pgm:	APIcliente100
data:	04/08/2018

author: Luiz Carlos Arruda
TCC Engenharia de Software - turma 2/2016
Pontifica Universidade Catolica de Minas Gerais
*/

$request_method=$_SERVER["REQUEST_METHOD"];
@$method = isset($_GET['method']) ? $_GET['method'] : ''; // Metodo para adequação em uso HTTP

require_once '../conexao/config.php';

header('Content-Type:' . "text/plain");

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if(!$con) {
 			echo '[{"erro": "Não foi possível conectar ao banco"';
 			echo '}]';
 			}else {

	$id 			= isset($_GET['id']) ? $_GET['id'] : '';
	$cpf 			= isset($_GET['cpf']) ? $_GET['cpf'] : '';
	$nomeCliente 	= isset($_GET['nomeCliente']) ? $_GET['nomeCliente']: '';
	$endereco 		= isset($_GET['endereco']) ? $_GET['endereco'] : '';
	$estado 		= isset($_GET['estado']) ? $_GET['estado'] : '';
	$municipio 		= isset($_GET['municipio']) ? $_GET['municipio'] : '';
	$telefone 		= isset($_GET['telefone']) ? $_GET['telefone'] : '';
	$email 			= isset($_GET['email']) ? $_GET['email'] : '';
	$senha 			= isset($_GET['senha']) ? $_GET['senha'] : '';


if (($request_method !=$method) and (!empty($method)) ){$request_method = $method ;}

	switch($request_method)
	{

// READ - Leitura de  registro da base 

		case 'GET':

 // Leitura de registros por email
			if(!empty($_GET["email"]))
			{
				$sql = "SELECT * FROM cliente WHERE email = '$email' ";
			} else 
			{
			if(!empty($_GET["id"]))
				{
 
 // Leitura de registros por id
 				$sql = "SELECT * FROM cliente WHERE id = '$id' ";
				} else 
				{
 
 // Leitura de todos os registros da base
				$sql = "SELECT * FROM cliente  order by id desc ";
				}
			}			
 			$result = mysqli_query($con,$sql); //Executar a SQL
			$n = mysqli_num_rows($result);

			if (!$result) 	
			{
 				echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"';
 				echo '}]';
 			}else if($n<1) 
				{
 				echo '[{"erro": "registro não existe no cadastro"';
 				echo '}]';
 				}else 
				{
 				for($i = 0; $i<$n; $i++) { $dados[] = mysqli_fetch_assoc($result); } echo json_encode($dados, JSON_PRETTY_PRINT);
 			}
			mysqli_close($con);
			break;

// INSERT - Inserir registro na base

		case 'POST':

			$sql = "INSERT INTO `cliente` 
			(
			`cpf`,
			`nomeCliente`,
			`endereco`,
			`estado`,
			`municipio`,
			`telefone`,
			`email`,
			`senha`
			) values (
			'$cpf',
			'$nomeCliente',
			'$endereco',
			'$estado',
			'$municipio',
			'$telefone',
			'$email',
			'$senha'
			)";
			$result = mysqli_query($con, $sql); //Executar a SQL

			if(mysqli_affected_rows($con) > 0)
			{
				
				if (empty($method)) 
				{
				echo '[{"sucesso": "registro incluido no cadastro"';
 				echo '}]';	
 			} else {
 				   header("Location:  http://tcc.pucminas.flagrh.com.br/phpFiles/view/Conteudo/msgClienteCadastrado.php");
 			}

			} else 
			{

								if (empty($method)) 
				{
				echo '[{"erro": "registro não incluido no cadastro"';
 				echo '}]';	
 			} else {
 				   header("Location: http://tcc.pucminas.flagrh.com.br/phpFiles/view/Conteudo/msgClienteExiste.php");
 			}

			}
			mysqli_close($con);
			break;

// UPDATE - Atualizar registro na base

		case 'PUT':

    		$sql=("UPDATE cliente SET
	
			cpf 		= '$cpf',
			nomeCliente	= '$nomeCliente',
			endereco 	= '$endereco',
			estado 		= '$estado',
			municipio 	= '$municipio',
			telefone 	= '$telefone',
			email 		= '$email',
			senha 		= '$senha'

			WHERE id=$id");

			$result = mysqli_query($con, $sql); //Executar a SQL
			if(mysqli_affected_rows($con) > 0)
			{
				if (empty($method)) 
				{
				echo '[{"sucesso": "registro alterado no cadastro"';
 				echo '}]';	
 				} else 
 				{
 				   header("Location:  http://tcc.pucminas.flagrh.com.br/phpFiles/view/Conteudo/msgClienteAlterado.php");
 			}

			} else {

				if (empty($method)) 
				{
				echo '[{"erro": "registro não alterado no cadastro"';
 				echo '}]';	
 				} else {
 				   header("Location:  http://tcc.pucminas.flagrh.com.br/phpFiles/view/Conteudo/msgClienteAlterado.php");
 				}

			}
			mysqli_close($con);
			break;

// DELETE - Excluir registro da base 

		case 'DELETE':

// Exclusão por email 
			if(!empty($_GET["email"]))
			{
				$sql = "DELETE FROM cliente WHERE email = '$email' ";
			} else 
			{
				if(!empty($_GET["id"]))
				{
 // Exclusão por id 
 				$sql = "DELETE FROM cliente WHERE id = '$id' ";
				} 
			}			
			$result = mysqli_query($con, $sql); //Executar a SQL
			if(mysqli_affected_rows($con) > 0)
			{
				if (empty($method)) 
				{
				echo '[{"sucesso": "registro excluido do cadastro"';
 				echo '}]';	
 				} else 
 				{
 				   header("Location:  http://tcc.pucminas.flagrh.com.br/phpFiles/view/Conteudo/msgClienteExcluido.php");
 				}
			} else 
			{
				echo '[{"erro": "registro não existe no cadastro"';
 				echo '}]';
			}
			mysqli_close($con);
			break;

// Default - Verbo nao suportado pela API

		default:

			echo "seleção fora do CRUD"; exit;
			mysqli_close($con);
			break;
	}

exit;

}
?>