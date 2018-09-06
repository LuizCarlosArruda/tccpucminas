<?php
session_start();

//@$method = $_SESSION["method"]  ;
$message = "uma mensagem";

// Conexão com o banco de dados

require_once '../../conexao/Conexao.php';

$email            = $_SESSION['email'];
$pass             = $_SESSION['pass'];
//$num_rows            = $_SESSION['num_rows'];

$senha = '';

echo "email($email)<br>";
echo "pass($pass)<br>";
//echo "num_rows($num_rows)<br>";//exit;
?>

<!doctype html>
<html lang="pt-br">
<head>
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="scripty.js" type="text/javascript"></script>
</head>

<body onload="carregarItens()">
<script>
    var lixo = localStorage.getItem("estado");
</script>

 
<?php
$num_rows            = $_SESSION['num_rows'];
   $passDB = "<script>document.write(lixo)</script>";
  // echo $passDB;

   if ($passDB === $pass)
    {echo "($passDB) igual ($pass) ";} else {echo "($passDB) diferente ($pass)";}
echo "num_rows($num_rows)<br>";//exit;

?>
 



</body>
</html>