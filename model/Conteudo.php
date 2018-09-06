<?php

echo "<br> X1 - entrou no model/conteudo.php";

exit;

include '../../conexao/Conexao.php';

echo "<br> X2 - voltou de conexao/Conexao.php";

//class cliente extends Conexao{
    class cliente {
	private $cpf;
    private $nomeCliente;
    private $endereco;
    private $estado;
    private $municipio;
    private $telefone;
    private $email;
    private $senha;


    function getcpf() {
        return $this->cpf;
    }

    function getnomeCliente() {
        return $this->nomeCliente;
    }

    function getendereco() {
        return $this->endereco;
    }

    function getestado() {
        return $this->estado;
    }

    function getmunicipio() {
        return $this->municipio;
    }

    function gettelefone() {
        return $this->telefone;
    }
    function getemail() {
        return $this->email;
    }

    function getsenha() {
        return $this->senha;
    }

    function setcpf($cpf) {
        $this->cpf = $cpf;
    }

    function setnomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    function setendereco($endereco) {
        $this->endereco = $endereco;
    }

    function setestado($estado) {
        $this->estado = $estado;
    }

    function setmunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function settelefone($telefone) {
        $this->telefone = $telefone;
    }
    function setemail($email) {
        $this->email = $email;
    }

    function setsenha($senha) {
        $this->senha = $senha;
    }

 //       echo "<br> X3 - antes de function findAll";

	public function findAll(){


        echo "<br> X4 - apos function findAll";


        
		$sql = "SELECT * FROM cliente";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>