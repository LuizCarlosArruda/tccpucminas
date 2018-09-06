/**
* Capturar itens do banco de dados
*/
function carregarItens(){
	//variáveis

	//var itens = "", url = "../../model/APIdados52a.php";
	var itens = "", url = "../../model/APIdados53.php";

    //Capturar Dados Usando Método AJAX do jQuery
     $.ajax({
	    url: url,
	    cache: false,
	    dataType: "json",
	    beforeSend: function() {
		    $("h2").html("Carregando..."); //Carregando
	    },
	    error: function() {
		    $("h2").html("não carrega a chamada ???");
	    },
	    
	    success: function(retorno) {
		    if(retorno[0].erro){
			    $("h2").html(retorno[0].erro);
		    }
		    else{
			    //Laço para criar linhas da tabela
			    for(var i = 0; i<retorno.length; i++){
			    
					id 			= retorno[i].id;
					cpf 		= retorno[i].cpf;
					nomeCliente = retorno[i].nomeCliente;
					endereco 	= retorno[i].endereco;
					estado 		= retorno[i].estado;
					municipio 	= retorno[i].municipio;
					telefone 	= retorno[i].telefone;
					email 		= retorno[i].email;
					senha 		= retorno[i].senha;

			    }

    $("#minhaTabela tbody").html(itens);
			    //Preencher a Tabela

			    $("id").html(id);
			    $("cpf").html(cpf);
			    $("nomeCliente").html(nomeCliente);
			    $("endereco").html(endereco);
			    $("estado").html(estado);
			    $("municipio").html(municipio);
			    $("telefone").html(telefone);
			    $("email").html(email);
			    $("senha").html(senha);
			    


//var scripAjs = "scriptA@email2.com.br"

// Check browser support
if (typeof(Storage) !== "undefined") 
	{
    // Store
    	localStorage.setItem("id", id);
        localStorage.setItem("cpf", cpf);
        localStorage.setItem("nomeCliente", nomeCliente);
        localStorage.setItem("endereco", endereco);
        localStorage.setItem("estado ", estado);
        localStorage.setItem("municipio", municipio);
        localStorage.setItem("telefone", telefone);
        localStorage.setItem("email", email);
        localStorage.setItem("senha", senha);
    // Retrieve
  //  document.getElementById("estado").innerHTML = localStorage.getItem("estado");

    //localStorage.removeItem("name2");

	} else {
    document.getElementById("name").innerHTML = "Sorry, your browser does not support Web Storage...";
	}








			    //Limpar Status de Carregando
			    $("h2").html("Carregado");

		    }
	    }
    });
}