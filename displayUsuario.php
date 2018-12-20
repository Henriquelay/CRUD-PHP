<?php
class Aluno extends Conexao{                                           // declara os atributos da classe
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
        
        // echo $atributo . " configurado para " . $valor . "</br>";        
    }

    public function __destruct(){
        // echo $this->nome . " foi destruido.";
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

}


?>