<?php
session_start();
//finaliza sessão server side
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="favicon.png" />
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
<body onload="clearLocalStorage()">
<script>
    function clearLocalStorage()
//finaliza sessão client side
//limpa localStorage
        {
        localStorage.clear();
        }
</script>
'<script>location.href = "http://pucminas.br"</script>'
</body>
</html>

<?php
echo "obrigado por utilizar nossos serviços";
exit;
?>