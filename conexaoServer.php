<?php

class Conexao{
    private $servidor;
    private $usuario;
    private $senha;
    private $database;

    //  Variavel de conexao
    protected function criaConexao(){
        $this->$servidor = "locahost";
        $this->$usuario = "hclayber";
        $this->$senha = "preguicarolica";
        $this->$tabela = "crudphp_hclayber";

        $conexao = new mysqli($this->$servidor, $this->$usuario, $this->$senha, $this->$tabela);

        if($conexao->connect_error){
            die("Conexão falhou: </br>" . $conexao->connect_error);
        }else{
            echo "Conectado ao banco de dados</br>";
        }

        return $conexao;
    }

    

}
?>