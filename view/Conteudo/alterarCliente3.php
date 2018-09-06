<?php

session_start();

// carrega mensagem inicial para o cliente

$message        = "Informe as alterações desejadas";

@$endereco      = $_SESSION['endereco']  ;
@$estado        = $_SESSION['estado']  ;
@$municipio     = $_SESSION['municipio']  ;

// verifica se os dados foram preenchidos

if(isset($_POST['endereco']))
{
    $endereco                   = $_POST["endereco"];
    $estado                     = $_POST["estado"];
    $municipio                  = $_POST["municipio"];

    $_SESSION['endereco']       = isset($_POST['endereco']) ? $_POST['endereco'] : '';
    $_SESSION['estado']         = isset($_POST['estado'])  ? $_POST['estado']  : '';
    $_SESSION['municipio']      = isset($_POST['municipio'])  ? $_POST['municipio']  : '';

   // header("Location: Cadastrar3.php");
    header("Location: alterarCliente4.php");

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
            </h1>
        </div>
    </div>
    <div class="wrap content-inner">
    <form method="post" action="" name="Cadastrar3">
            <div data-role="fieldcontain" data-controltype="text">
                <mensagem>
                    <?php echo "$message"; ?>
                </mensagem> 
            </div>
            <br>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="endereco" 
                    >endereço
                </label>
                <input type="text" id="endereco" data-mini="true"
                    placeholder="digite seu endereço"
                    name="endereco"  required AUTOCOMPLETE="OFF"
                    type="text"  
                    value="<?php echo "$endereco"; ?>"
                    title="informe seu endereço"> 
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="municipio"> 
                    municipio
                </label>
                <input type="text" id="municipio" data-mini="true"
                    placeholder="digite o nome do seu municipio"
                    name="municipio" required AUTOCOMPLETE="OFF"
                    type="text"  
                    value="<?php echo "$municipio"; ?>"
                    title="informe o nome do seu municipio. ex: Belo Horizonte"/> 
            </div>    
            <div data-role="fieldcontain" data-controltype="textinput">
                  <label for="estado">
                    estado
                </label>
                <input type="text" id="estado" data-mini="true"
                    placeholder="digite a sigla do seu estado" 
                    name="estado" required 
                    value="<?php echo "$estado"; ?>"
                    pattern=".{2,2}" required AUTOCOMPLETE="OFF"
                    title="informe a sigla do seu estado ex: MG"/>
            </div>
            <br>
        <button class="btn btn-primary"
                value="cadastrar3" 
                name="cadastrar3"
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
