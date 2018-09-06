<?php  
// inicia sessão
session_start();
$message = "";

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
                MENU CLIENTE
            </h1>
        </div>    
    </div>
    <div class="wrap content-inner">
        <form method="post" action="" name="Login">
            <div data-role="fieldcontain" data-controltype="text">
                <mensagem>
                    <?php echo "$message"; ?>
                </mensagem> 
                <br>
            </div>
            <div    data-role="fieldcontain" data-controltype="textinput">
                    <button class="btn btn-white"
                    onclick="javascript: location.href='msgOpcaoIndisponivel.php';" 
                    type="button">produto
            </button>
            </div>
           <div    data-role="fieldcontain" data-controltype="textinput">
                    <button class="btn btn-white"
                    onclick="javascript: location.href='msgOpcaoIndisponivel.php';" 
                    type="button">carrinho
            </button>
            </div>
                       <div    data-role="fieldcontain" data-controltype="textinput">
                    <button class="btn btn-white"
                    onclick="javascript: location.href='msgOpcaoIndisponivel.php';" 
                    type="button">pedido
            </button>
            </div>
                       <div    data-role="fieldcontain" data-controltype="textinput">
                    <button class="btn btn-white"
                    onclick="javascript: location.href='msgOpcaoIndisponivel.php';"  
                    type="button">pagamento
            </button>
            </div>
           <div    data-role="fieldcontain" data-controltype="textinput">
                    <button class="btn btn-white"
                    onclick="javascript: location.href='meuCadastro.php';" 
                    type="button">meu cadastro
            </button>
            </div>

            <br>
 
            <button class="btn btn-grey"
                onclick="javascript: location.href='exit.php';" 
                type="button">sair do sistema
            </button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
    </div>
</body>
</html>