<?php  
// inicia sessão
session_start();

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
        <form method="post" action="" name="Login">
            <div data-role="fieldcontain" data-controltype="text">
            <br><br>
            <button class="btn box-red"
                type="text">
                Seu cadastro foi excluido do Sistema
            </button>
            <br><br><br>

            <button class="btn btn-orange"
                onclick="javascript: location.href='exit.php';" 
                type="button">sair

            </button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
    </div>
</body>
</html>