<?php

session_start();

// carrega mensagem inicial para o cliente

$message        = "Informe as alterações desejadas";
@$cpf            = $_SESSION['cpf']  ;
@$nomeCliente    = $_SESSION['nomeCliente']  ;
@$telefone       = $_SESSION['telefone'] ;

// verifica se os dados foram preenchidos

if(isset($_POST['cpf']))
{
    $cpf                        = $_POST["cpf"];
    $nomeCliente                = $_POST["nomeCliente"];
    $telefone                   = $_POST["telefone"];

    $_SESSION['cpf']            = isset($_POST['cpf']) ? $_POST['cpf'] : '';
    $_SESSION['nomeCliente']    = isset($_POST['nomeCliente'])  ? $_POST['nomeCliente']  : '';
    $_SESSION['telefone']       = isset($_POST['telefone'])  ? $_POST['telefone']  : '';

   // header("Location: Cadastrar3.php");
    header("Location: alterarCliente3.php");

}

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
                ALTERAR CLIENTE
        </div>
<div class="wrap content-inner">
	<form method="post" action="" name="Cadastrar2">
    
        <div data-role="fieldcontain" data-controltype="text">
            <mensagem>
            <?php echo "$message"; ?>
            </mensagem> 
        </div>
        <br>
        <div data-role="fieldcontain" data-controltype="textinput">
            <label for="cpf">
                cpf
            </label>
            <input type="text" id="cpf" data-mini="true"
                placeholder="digite seu cpf"
                name="cpf"  required AUTOCOMPLETE="OFF"
                type="text"  
                value="<?php echo "$cpf"; ?>"
                title="informe seu cpf"/> 
        </div>
   
        <div data-role="fieldcontain" data-controltype="textinput">
            <label for="nome">
                nome
            </label>
            <input type="text" id="nomeCliente" data-mini="true"
                placeholder="digite seu nome"
                name="nomeCliente" required AUTOCOMPLETE="OFF"
                type="text"  
                value="<?php echo "$nomeCliente"; ?>"
                title="informe seu nome"/> 
        </div>    
        <div data-role="fieldcontain" data-controltype="textinput">
            <label for="telefone"> 
                telefone
            </label>
            <input type="text" id="telefone" data-mini="true"
                placeholder="digite o numero do seu telefone" 
                name="telefone" required AUTOCOMPLETE="OFF" 
                pattern=".{10,11}" 
                value="<?php echo "$telefone"; ?>"
                title=" apenas os numeros ex: 11998765432 "/>
        </div>
        <br>
        <button class="btn btn-primary"
                value="cadastrar2" 
                name="cadastrar2"
                type="submit">prosseguir
        </button>
        <button class="btn btn-grey"
                onclick="javascript: location.href='menuCliente.php';" 
                type="button">cancelar
        </button>
        <br><br><br><br><br><br><br><br><br><br><br><br>
	</form>
</div>
</body>
</html>
