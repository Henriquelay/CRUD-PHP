<?php
    echo 'importou caralho';

class Aluno extends Informacao{                                           // declara os atributos da classe
    public $matricula;
    public $nome;
    public $email;
    public $CPF;
    public $celular;
    public $estrelinha;

    function __getAluno($atributo){                     // magic getter
        return $this->$atributo;
    }

    function __setAluno($atributo, $valor){             // magic setter (com verificacao de entrada simples)
        switch($atributo){
            case "nome":
                $this->nome = $valor;
                break;
            case "matricula":
                $this->matricula = $valor;
                break;
            case "email":
                $this->email = $valor;
                break;
            case "CPF":
                $this->CPF = $valor;
                break;
            case "celular":
                $this->celular = $valor;
                break;
            case "estrelinha":
                $this->estrelinha = $valor;
                break;
            default:
                echo "Algo de errado nao esta certo. " . $atributo . " nao existe!</br>";
        }
        
        echo $atributo . " configurado para " . $valor . "</br>";        
    }

    public function __destruct(){
        echo $this->nome . " foi destruido.";
    }
    
        function __toString(){
                echo ("Nome: " . $this->nome . "</br>Matricula: " . $this->matricula . "</br>Email: " . $this->email . "</br>CPF: " . $this->CPF . "</br>Celular: " . $this->celular . "</br>Estrelinha: " . $this->estrelinha . "</br>");
        }

    function __construct($novonome, $novomatricula, $novoemail, $novoCPF, $novocelular, $novoestrelinha){
        // magic constructor
        $this->__setAluno('nome', $novonome);
        $this->__setAluno('matricula', $novomatricula);
        $this->__setAluno('email', $novoemail);
        $this->__setAluno('CPF', $novoCPF);
        $this->__setAluno('celular', $novocelular);
        $this->__setAluno('estrelinha', $novoestrelinha);
    }

    public function mostrarUsuarios(){
        $dados = $this->pegarUsuarios();
        for($i = 0; $i < $this->numLinhas; $i++){
            echo $dados[$i]['nome'] . $dados[$i]['matricula'] . $dados[$i]['email'] . $dados[$i]['CPF'] . $dados[$i]['celular'] . $dados[$i]['estrelinha']  . "</br>";
        }
    }
}


?>