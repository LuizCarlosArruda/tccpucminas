<?php  
// inicia sessão
session_start();

@$cpf           = $_SESSION['cpf']  ;
@$nomeCliente   = $_SESSION['nomeCliente']  ;
@$endereco      = $_SESSION['endereco']  ;
@$estado        = $_SESSION['estado']  ;
@$municipio     = $_SESSION['municipio']  ;
@$telefone      = $_SESSION['telefone'] ;
@$email         = $_SESSION['email'] ;
@$senha         = $_SESSION['senha'] ;

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
        <div class="wrap">
            <h1 class="page-title">
                CADASTRO DE CLIENTE
            </h1>
        </div>
    </div>
    <div class="wrap content-inner">
<form action="http://tcc.pucminas.flagrh.com.br/phpFiles/control/APIcliente101.php" method="GET">
   <div data-role="fieldcontain" data-controltype="textinput">
        <label for="email" 
          >email
        </label>
        <input type="email" id="email" data-mini="true"
            placeholder="informe o email a ser cadastrado"
            name="email"  required AUTOCOMPLETE="OFF"
            type="email"  
             value="<?php echo "$email"; ?>"
            title="informe seu email"> 
    </div>
   
    <div data-role="fieldcontain" data-controltype="textinput">
        <label for="pass" 
           >senha
        </label>
        <input type="text" id="senha" data-mini="true"
            placeholder="minimo de 6 e máximo de 15 caracteres"
            name="senha" required 
            value = "<?php echo "$senha"; ?>" 
            pattern=".{6,15}" required AUTOCOMPLETE="OFF"
            title="tamanho minimo de 6 e máximo de 15 caracteres">
     </div>    
     <div data-role="fieldcontain" data-controltype="textinput">
        <label for="cpf"
            >cpf
        </label>
        <input type="text" id="cpf" data-mini="true"
            placeholder="digite seu cpf"
            name="cpf"  required AUTOCOMPLETE="OFF"
            type="text"  
            value="<?php echo "$cpf"; ?>"
            title="informe seu cpf"/> 
    </div>
    <div data-role="fieldcontain" data-controltype="textinput">            
        <label for="nome"
            >nome
        </label>
        <input type="text" id="nomeCliente" data-mini="true"
            placeholder="digite seu nome"               
            name="nomeCliente" required AUTOCOMPLETE="OFF"
            type="text"  
            value="<?php echo "$nomeCliente"; ?>"
            title="informe seu nome"/> 
    </div>    
    <div data-role="fieldcontain" data-controltype="textinput">
        <label for="telefone"
            >telefone
        </label>
        <input type="text" id="telefone" data-mini="true"
            placeholder="digite o numero do seu telefone" 
            name="telefone" required AUTOCOMPLETE="OFF" 
            pattern=".{10,11}" 
            value="<?php echo "$telefone"; ?>"
            title=" apenas os numeros ex: 11998765432 "/>
    </div>
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
        <label for="municipio"
            >municipio
        </label>
        <input type="text" id="municipio" data-mini="true"
            placeholder="digite o nome do seu municipio"
            name="municipio" required AUTOCOMPLETE="OFF"
            type="text"  
            value="<?php echo "$municipio"; ?>"
            title="informe o nome do seu municipio. ex: Belo Horizonte"/> 
    </div>    
    <div data-role="fieldcontain" data-controltype="textinput">
        <label for="estado"
            >estado
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
            type="submit">salvar cliente
    </button>        
    <input type="hidden"    name="method" value="POST" />
    <input type="hidden"    name="cpf" value="<?php echo "$cpf"; ?>" />                
    <input type="hidden"    name="nomeCliente" value="<?php echo "$nomeCliente"; ?>" />                
    <input type="hidden"    name="senha" value="<?php echo "$senha"; ?>" />
    <input type="hidden"    name="email" value="<?php echo "$email"; ?>" />
    <input type="hidden"    name="telefone" value="<?php echo "$telefone"; ?>" />
    <br><br><br><br><br><br><br><br><br><br><br><br>      
</form>
</body>
</html>