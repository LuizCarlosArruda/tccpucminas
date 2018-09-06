<?php
session_start();
session_destroy();
session_start();

//$_SESSION['login'] = "OFF" ;


//@$login           = $_SESSION['login']  ;

//if ($login  == "ON") 
//{
//    session_unset($_SESSION); 
//}
//    $_SESSION['login']  = "OFF";

// carrega mensagem inicial para o cliente

$message        = "Informe o email e senha a ser cadastrado";
@$email        = $_SESSION['email'] ;
@$senha         = $_SESSION['senha'] ;
$passConfirm    = '';

// verifica se email e senha foram preenchidos

if(isset($_POST['email']))
{    
    $email         = $_POST["email"];
    $senha          = $_POST["senha"];
    $passConfirm    = $_POST["passConfirm"];

    if ($senha!= $passConfirm) 
    {
        $message     = "Confirmação de senha incorreta";
        $senha       = "";
        $passConfirm = "";
    } else
    {
    $_SESSION['email'] = $email;          
    $_SESSION['senha']  = $senha ;
    header("Location: cadastrarCliente2.php");
    }
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
                CADASTRO DE CLIENTE
            </h1>
        </div>
<div class="wrap content-inner">
	<form method="post" action="" name="Cadastrar">
    
     <div data-role="fieldcontain" data-controltype="text">
        <mensagem>
        <?php echo "$message"; ?>
        </mensagem> 
    </div>
    <br>
    <div data-role="fieldcontain" data-controltype="textinput">
        <label for="email" 
          >email
        </label>
        <input type="email" id="email" data-mini="true"
            placeholder="informe o email a ser cadastrado"
            name="email"  required AUTOCOMPLETE="OFF"
            type="email"  
             value="<?php echo "$email1"; ?>"
            title="informe seu email"> 
    </div>
   
    <div data-role="fieldcontain" data-controltype="textinput">
        <label for="pass" 
           >senha
        </label>
        <input type="password" id="senha" data-mini="true"
            placeholder="minimo de 6 e máximo de 15 caracteres"
            name="senha" required 
            value = "<?php echo "$senha"; ?>" 
            pattern=".{6,15}" required AUTOCOMPLETE="OFF"
            title="tamanho minimo de 6 e máximo de 15 caracteres">
     </div>    
    <div data-role="fieldcontain" data-controltype="textinput">
        <label for="passConfirm" 
           >confirmar senha
        </label>
        <input type="password" id="passConfirm" data-mini="true"
            placeholder="digite novamente a senha desejada"
            name="passConfirm" required 
            value = "<?php echo "$passConfirm"; ?>" 
            pattern=".{6,15}" required AUTOCOMPLETE="OFF"
            title="informe novamente sua senha">
     </div>
     <br>
 

        <button class="btn btn-primary"
                value="cadastrar" 
                name="cadastrar"
                type="submit">prosseguir
        </button>
        <button class="btn btn-grey"
                onclick="javascript: location.href='exit.php';" 
                type="button">cancelar
        </button>
        <br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
</div>
</div>

</body>
</html>
