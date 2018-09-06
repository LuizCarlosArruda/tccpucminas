<?php
session_start();

// faz a carga das variaveis de sessao para uso na pagina


$cpf            = $_SESSION['cpf']  ;
$nomeCliente    = $_SESSION['nomeCliente']  ;
$endereco       = $_SESSION['endereco']  ;
$estado         = $_SESSION['estado']  ;
$municipio      = $_SESSION['municipio']  ;
$telefone       = $_SESSION['telefone'] ;
$email          = $_SESSION['email'] ;
$senha          = $_SESSION['senha'] ;
$id             = $_SESSION['id'] ;

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
<body >
    <div class="content">
        <div class="wrap">
            <h1 class="page-title">
                SCES 
            </h1>
            <h1>
                MEU CADASTRO
            </h1>
        </div>
        <div class="wrap">
            <h1 class="page-title">
                <br>
            </h1>
        </div>
        <div class="wrap content-inner">
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label>email</label><part><?php echo "$email";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label>senha</label><part><?php echo "$senha";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label>cpf</label><part><?php echo "$cpf";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
            <label>nome</label><part><?php echo "$nomeCliente";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label>telefone</label><part><?php echo "$telefone";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label/>endereço</label><part><?php echo "$endereco";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label>município</label><part><?php echo "$municipio";?></part>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                <label>estado</label><part><?php echo "$estado";?></part>
            </div>
            <br>
            <button class="btn btn-yellow"
                    onclick="javascript: location.href='alterarCliente.php';" 
                    type="button">alterar cliente
            </button>
            <button class="btn btn-red"
                    onclick="javascript: location.href='excluirCliente.php';" 
                    type="button">excluir cliente
            </button>
            <button class="btn btn-primary"
                    onclick="javascript: location.href='menuCliente.php';" 
                    type="button">menu cliente
            </button>
            <br>
            <br>
        </div>
    </div>
</body>
</html>