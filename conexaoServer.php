<?php

class Conexao{
    private $servidor = "localhost";
    private $usuario = "hclayber";
    private $senha = "preguicarolica";
    private $tabela = "usuariosLab";

    //  Variavel de conexao
    private $conexao = new mysqli($servidor, $usuario, $senha, $tabela);

}
// Checa se a conexao funcionou
if ($conn->connect_error){
    die("Conexão falhou: </br>" . $conn->connect_error);
} 
echo "Conectado ao banco de dados</br>";

?>