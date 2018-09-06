<?php  
// inicia sessão
session_start();

$email          = $_SESSION['email'] ;

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
                EXCLUIR CADASTRO
            </h1>
        </div>
   <div class="wrap content-inner">
        <form action="http://tcc.pucminas.flagrh.com.br/phpFiles/control/APIcliente101.php" method="GET">
            <div data-role="fieldcontain" data-controltype="text">
  
    <div class="wrap content-inner">
        <form method="post" action="" name="Login">
            <div data-role="fieldcontain" data-controltype="text">
            <br><br>
            <button class="btn box-red"
                type="text">
                Você deseja realmente excluir seu cadastro do Sistema?
            </button>
            <br><br><br>
            <button class="btn btn-red"
                    value="cadastrar3" 
                    name="cadastrar3"
                type="submit">excluir cliente

            </button>
            <button class="btn btn-primary"
                onclick="javascript: location.href='menuCliente.php';" 
                type="button">retornar

            </button>

            </button>

            <input type="hidden"    name="method" value="DELETE" />
            <input type="hidden"    name="cpf" value="<?php echo "$cpf"; ?>" />                
            <input type="hidden"    name="nomeCliente" value="<?php echo "$nomeCliente"; ?>" />                
            <input type="hidden"    name="senha" value="<?php echo "$senha"; ?>" />
            <input type="hidden"    name="email" value="<?php echo "$email"; ?>" />
            <input type="hidden"    name="telefone" value="<?php echo "$telefone"; ?>" />
            <br><br><br><br><br><br><br><br><br><br><br><br>      
        </form>


            <br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
    </div>
</body>
</html>