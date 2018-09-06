<?php  
// inicia sessão
session_start();
    $message                = " informe seu email e senha"; 

// verifica se email esta preenchido

if (isset($_POST['email'])) 
{

// carrega variaveis locais e de sessão 

    $email              = isset($_POST['email']) ? $_POST['email'] : '';
    $pass               = isset($_POST['pass']) ? $_POST['pass'] : '';
    $_SESSION['email']  = isset($_POST['email']) ? $_POST['email'] : '';
    $_SESSION['pass']   = isset($_POST['pass'])  ? $_POST['pass']  : '';
    $_SESSION['login']  = "ON";

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

// verifica se o email informado esta cadastrado

    if ($key == 'erro') 
    {
        $message = " email não cadastrado no sistema";
    }
    else
    {
        if ($key == 'senha' and $value != $pass  ) 
        {
// informa que a senha esta incorreta

        $message = " senha incorreta";
        }
        else 
        {
             $_SESSION['email'] = $email;
            $_SESSION['telefone'] = $telefone;
            $_SESSION['senha'] = $senha;
            $_SESSION['estado'] = $estado;
            $_SESSION['municipio'] = $municipio;
            $_SESSION['endereco'] = $endereco;
            $_SESSION['cpf'] = $cpf;
            $_SESSION['nomeCliente'] = $nomeCliente;
            $_SESSION['id'] = $id;

// faz a chamada de meuCadastro se a senha estiver correta

            header("Location: meuCadastro.php");
        }
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
                <br>
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
                <label for="email">
                    email
                </label>
                <input type="email" id="email" data-mini="true"
                    placeholder="informe seu email" 
                    name="email"  required AUTOCOMPLETE="OFF"
                    type="email"  value="" 
                    title="informe um email cadastrado no sistema"> 
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="password">
                    senha
                </label>
                <input type="password" id="password" data-mini="true"
                    placeholder="digite sua senha" 
                    name="pass" required 
                    pattern=".{6,15}" required AUTOCOMPLETE="OFF"
                    title="informe sua senha com tamanho mínimo de 6 e máximo de 15 caracteres">
            </div>    
            <br>
            <p><a   class="choose-state-trigger" 
                    href="./cadastrarCliente.php">
                <label>
                    cadastrar cliente
                </label></a>
            </p>
            <button class="btn btn-primary"
                value="login" 
                name="login"
                type="submit">efetuar logon
            </button>
            <button class="btn btn-grey"
                onclick="javascript: location.href='exit.php';" 
                type="button">cancelar
            </button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
    </div>
</body>
</html>