<?php  
// inicia sessão
session_start();
$cpf            = $_SESSION['cpf']  ;
$nomeCliente    = $_SESSION['nomeCliente']  ;
$endereco       = $_SESSION['endereco']  ;
$estado         = $_SESSION['estado']  ;
$municipio      = $_SESSION['municipio']  ;
$telefone       = $_SESSION['telefone'] ;
$email          = $_SESSION['email'] ;
$senha          = $_SESSION['senha'] ;
$id             = $_SESSION['id'] ;




// faz a chamada da API

    $endpoint = 'http://tcc.pucminas.flagrh.com.br/phpFiles/control/APIcliente101/'; 
    $getAPI = file_get_contents($endpoint.$email);
    $myarray = json_decode($getAPI);
    $myarray = array_shift($myarray);

// faz a carga do array recebido da API

    foreach($myarray as $key => $value)
    {
    $$key = $value;
    }

// carrega variaveis de sessão

    
            $_SESSION['email'] = $email;
            $_SESSION['telefone'] = $telefone;
            $_SESSION['senha'] = $senha;
            $_SESSION['estado'] = $estado;
            $_SESSION['municipio'] = $municipio;
            $_SESSION['endereco'] = $endereco;
            $_SESSION['cpf'] = $cpf;
            $_SESSION['nomeCliente'] = $nomeCliente;
            $_SESSION['id'] = $id;

?>

<!doctype html>
<html lang="pt-br">
<head>
    <title>TCC PUC-MG</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
  <meta name="Trabalho de conclusao de curso eng. soft 2016/2">
  <meta name="viewport" 
          content= "width=device-width, 
                    initial-scale=1, 
                    maximum-scale=1, 
                    user-scalable=no">
  <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<div class="content">
        <div class="wrap">
            <h1 class="page-title">
                SCES 
            </h1>
        </div>
                <div class="wrap">
            <h1 class="page-title">
                ALTERAR CADASTRO
            </h1>
        </div>
    <div class="wrap content-inner">
        <form method="post" action="" name="Login">
            <div data-role="fieldcontain" data-controltype="text">
            <br><br>
            <button class="btn box-green"
                type="text">
                CADASTRO alterado no Sistema
            </button>
            <br><br><br>

            <button class="btn btn-primary"
                onclick="javascript: location.href='meuCadastro.php';" 
                type="button">retormar

            </button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
    </div>
</body>
</html>