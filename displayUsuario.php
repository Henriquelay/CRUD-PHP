<?php
echo 'importou caralho';

class Aluno extends Informacao{                                           // declara os atributos da classe
    protected $nome;
    protected $matricula;
    protected $nascimento;
    protected $email;
    protected $CPF;
    protected $celular;
    protected $estrelinha;

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

            case "nascimento":
                $this->nascimento = $valor;
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

    function __construct($novonome, $novomatricula, $novonascimento, $novoemail, $novoCPF, $novocelular, $novoestrelinha){
        // magic constructor
        $this->__setAluno(nome, $novonome);
        $this->__setAluno(matricula, $novomatricula);
        $this->__setAluno(nascimento, $novonascimento);
        $this->__setAluno(email, $novoemail);
        $this->__setAluno(CPF, $novoCPF);
        $this->__setAluno(celular, $novocelular);
        $this->__setAluno(estrelinha, $novoestrelinha);
    }

    public function __destruct(){
        echo $this->name . "foi destruido.";
    }

    function __toString(){
            echo ("Nome: " . $this->nome . "</br>Matricula: " . $this->matricula . "</br>Nascimento: " . $this->nascimento . "</br>Email: " . $this->email . "</br>CPF: " . $this->CPF . "</br>Celular: " . $this->celular . "</br>Estrelinha: " . $this->estrelinha . "</br>");
    }

    protected function mostrarUsuarios(){
        $dados = $this->pegarUsuarios();
        foreach($dados as $usuario){
            echo $usuario . "</br>";
        }
    }

}
?>