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
 echo '[{"erro": "N�o foi poss�vel conectar ao banco"';
 echo '}]';
 }else {
 //SQL de BUSCA LISTAGEM
 $sql = "SELECT * FROM cliente WHERE id = '$id'";
 $result = mysqli_query($con,$sql); //Executar a SQL

$n = mysqli_num_rows($result);

//echo "$n Rows\n";


//exit;

if (!$result) 	{
 //Caso n�o haja retorno
 echo '[{"erro": "H� algum erro com a busca. N�o retorna resultados"';
 echo '}]';
 		}else if($n<1) 
		{
 //Caso n�o tenha nenhum item
 echo '[{"erro": "N�o h� nenhum dado cadastrado"';
 echo '}]';
 		}else 
		{
 //Mesclar resultados em um array

//$dados=mysqli_fetch_array($result,$n);
//printf ("%s (%s)\n",$row[0],$row[1]);

//exit;
 for($i = 0; $i<$n; $i++) { $dados[] = mysqli_fetch_assoc($result); } echo json_encode($dados, JSON_PRETTY_PRINT);
 } } ?>








