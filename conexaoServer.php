<?php
class Conexao{
    private $servidor = "localhost";
    private $usuario = "hclayber";
    private $senha = "preguicarolica";
    private $database = "crudphp_hclayber";
    private $tabela = "informacoesUsuarios";

    //  Variavel de conexao
    public function criaConexao(){
        $conexao = new mysqli($this->servidor, $this->usuario, $this->senha, $this->database);

        if($conexao->connect_error){
            die("Conexão falhou: </br>" . $conexao->connect_error);
        }

        return $conexao;
    }    

}
?>