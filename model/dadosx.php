<?php
/**
 * Tutorial jSON
 */

//Definir formato de arquivo
 header('Content-Type:' . "text/plain");



$id = '1';

//	$id 			= isset($_POST['id']) ? $_POST['id'] : '';




$con = new mysqli("179.188.16.199", "tccpucmg2018", "s1212dinox","tccpucmg2018");


if(!$con) {
 echo '[{"erro": "Não foi possível conectar ao banco"';
 echo '}]';
 }else {
 //SQL de BUSCA LISTAGEM
 $sql = "SELECT * FROM cliente WHERE id = '$id'";
 $result = mysqli_query($con,$sql); //Executar a SQL

$n = mysqli_num_rows($result);

//echo "$n Rows\n";


//exit;

if (!$result) 	{
 //Caso não haja retorno
 echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"';
 echo '}]';
 		}else if($n<1) 
		{
 //Caso não tenha nenhum item
 echo '[{"erro": "Não há nenhum dado cadastrado"';
 echo '}]';
 		}else 
		{
 //Mesclar resultados em um array

//$dados=mysqli_fetch_array($result,$n);
//printf ("%s (%s)\n",$row[0],$row[1]);

//exit;
 for($i = 0; $i<$n; $i++) { $dados[] = mysqli_fetch_assoc($result); } echo json_encode($dados, JSON_PRETTY_PRINT);
 } } ?>








